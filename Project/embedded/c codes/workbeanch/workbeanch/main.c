/*
* workbeanch.c
*
* Created: 3/27/2018 10:13:09 PM
* Author : zaian
*/

#define PASS_LEN 4
#define default_pass "1234"
#define GATE_PASSWORD_ADDRESS 0X0010
#define EEPRO_ADDRESS 0x0000

#include "headers/lcd.h"
#include "headers/keypad.h"
#include "headers/libs.h"
#include "headers/EEPROM.h"
#include "headers/motors.h"
#include "headers/ADCFunc.h"
#include "headers/uart.h"

union{
	uint8_t val8;
	uint16_t val16;
}Global;

uint8_t sREG;
char psswrd[5];
char GATE_PASSWORD[PASS_LEN+1];
uint8_t static passItr=0; //password iterator


int main(void)
{
	uint16_t adc_out;
	
	char key;
	
	// disable jtag protocol
	MCUCSR = (1<<JTD);
	MCUCSR = (1<<JTD);
	// set interrupts for INT2
	sei();
	SET_BIT(GICR,INT2);
	SET_BIT(MCUCSR,ISC2);
	
	// write default password to EEPROM
	EEPROM_WriteNByte(GATE_PASSWORD_ADDRESS,(uint8_t*)default_pass,PASS_LEN);
	
	LCD_init();
	Timer1_Fast_PWM_init();
	_delay_ms(100);

	SET_BIT(DDRB,PB0);
	SET_BIT(PORTB,PB0);
	

	while (1)
	{
		LCD_displayStringRowColumn(1,2,"temp : ");
		LCD_goToRowColumn(1,8);
		LCD_intgerToString((int)get_temperture());
		LCD_intgerToString((int)get_LDR());
		if(get_LDR()<100)
		{
			CLEAR_BIT(PORTB,PB0);	
		}else{
			SET_BIT(PORTB,PB0);
		}
		_delay_ms(3000);
			
	}

	


	
	
	/*
	while (1)
	{
	LCD_clearScreen();
	LCD_displayString("check out lights");
	//	 function of out door light
	
	ADCSRA|=(1<<6);
	_delay_ms(500);
	adc_out=ADCL;
	adc_out+=((ADCH|0x0000)<<8);
	if(adc_out<100)
	PORTD&=~(1<<2);
	else
	PORTD|=(1<<2);
	_delay_ms(3000);
	
	LCD_clearScreen();
	LCD_displayString("temp is : ");
	LCD_intgerToString((int)get_temperture());
	_delay_ms(3000);
	
	
	
	
	} // end the main while loop

	*/
} // end main

ISR (INT2_vect)
{
	LCD_displayStringRowColumn(0,0,"psswrd is:");
	psswrd[passItr]=KeyPad_getPressedKey();
	psswrd[passItr+1]='\0';
	LCD_displayStringRowColumn(0,10,psswrd);
	passItr++;
	
	if ( passItr >= PASS_LEN)
	{
		passItr=0;
		
		_delay_ms(500);
		LCD_clearScreen();
		EEPROM_readNByte( GATE_PASSWORD_ADDRESS, (uint8_t *) GATE_PASSWORD, PASS_LEN);
		if (!strcmp(psswrd,GATE_PASSWORD))
		{
			LCD_displayString("gate opens now");
			Timer1_Fast_PWM_rotate(SERVO_DEG_180);
			_delay_ms(5000);
			Timer1_Fast_PWM_stop();
		}
		else
		{
			LCD_displayString("WRONG PSSWRD :(");
			LCD_displayStringRowColumn(1,3,"try again");
			_delay_ms(1000);
		}
		LCD_clearScreen();

	}
}