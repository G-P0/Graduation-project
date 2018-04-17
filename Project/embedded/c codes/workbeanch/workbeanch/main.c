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
#include "headers/temp.h"

#include <stdio.h>

int main(void)
{
	// disable jtag protocol
	MCUCSR = (1<<JTD);
	MCUCSR = (1<<JTD);
	// out door light config
	
	DDRA&=~(1<<3);
	DDRD|=(1<<2);
	PORTD|=(1<<2);
	ADMUX&=~(1<<7);
	ADMUX&=~(1<<6);
	ADMUX|=(1<<1)|(1<<0);
	ADCSRA|=(1<<7);
	
	uint16_t adc_out;
	uint8_t i;
	char key;
	char psswrd[5];
	char GATE_PASSWORD[PASS_LEN+1];
	
	DDRD |= (1<<PD5); // for motor out pin

	EEPROM_WriteNByte(GATE_PASSWORD_ADDRESS,(uint8_t*)default_pass,PASS_LEN);
	LCD_init();
	stepper_motor_init();
	_delay_ms(100);
	
	
	
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
		
		while(1)
		{
			
			
			LCD_clearScreen();
			LCD_displayString("enter the psswrd");
			LCD_displayStringRowColumn(1,0,"psswrd: ");
			LCD_goToRowColumn(1,8);
			psswrd[0]='\0';
			i=0;
			while(i<PASS_LEN){
				key=KeyPad_getPressedKey();
				psswrd[i%PASS_LEN]= key;
				psswrd[(i%PASS_LEN)+1]='\0';
				i++;
				LCD_goToRowColumn(1,8);
				LCD_displayString(psswrd);
			}
			_delay_ms(500);
			LCD_clearScreen();
			EEPROM_readNByte( GATE_PASSWORD_ADDRESS, (uint8_t *) GATE_PASSWORD, PASS_LEN);
			if (!strcmp(psswrd,GATE_PASSWORD)){
				LCD_displayString("gate opens now");
				//Gate_open();
				stepper_motor_RR(Deg180);
				_delay_ms(3000);
				LCD_clearScreen();
				LCD_displayString("gate will close");
				stepper_motor_RL(Deg180);
				break;
			}
			else{
				LCD_displayString("WRONG PSSWRD :(");
				LCD_displayStringRowColumn(1,3,"try again");
				_delay_ms(3000);
			}
			
			
		} // end while loop of
		
		
	} // end the main while loop


} // end main

