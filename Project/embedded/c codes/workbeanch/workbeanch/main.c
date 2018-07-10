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
#include "headers/pins.h"
#include "headers/recv.h"

union{
	uint8_t val8;
	uint16_t val16;
}Global;

uint8_t sREG;
char psswrd[5];
char GATE_PASSWORD[PASS_LEN+1];
int old_action=0;
int x;
int action;
char dummy;
uint8_t static passItr=0; //password iterator


int main(void)
{
	uint16_t adc_out;
	
	char key;
	
	// disable jtag protocol
	MCUCSR = (1<<JTD);
	MCUCSR = (1<<JTD);
	
	// set interrupts for INT2
	LCD_init();
	LCD_clearScreen();
	LCD_displayString("start int2");
	_delay_ms(500);
	SET_BIT(GICR,INT2);
	SET_BIT(MCUCSR,ISC2);
	LCD_clearScreen();
	LCD_displayString("start int0");
	_delay_ms(500);
	//set interrupt for INT0
	SET_BIT(GICR,INT0);
	SET_BIT(MCUCR,ISC00);
	SET_BIT(MCUCR,ISC01);
	//clear INT0 flag by setting it to 1
	SET_BIT(GIFR,INTF0);
	sei();
	
	//receive data
	recv_init();
	//motor init
	Timer1_Fast_PWM_init();
	// write default password to EEPROM
	EEPROM_WriteNByte(GATE_PASSWORD_ADDRESS,(uint8_t*)default_pass,PASS_LEN);
	
	_delay_ms(100);
	//set pins to out high for off
	init_pins();
	
	while (1)
	{
		LCD_clearScreen();
		LCD_displayStringRowColumn(1,0,"temp: ");
		LCD_intgerToString((int)get_temperture());
		LCD_displayStringRowColumn(1,8,"OL:");
		x=(int)get_LDR();
		LCD_intgerToString(x);
		if(x>100)
		{
			CLEAR_BIT(PORTB,PB0);
			}else{
			SET_BIT(PORTB,PB0);
		}
		_delay_ms(1000);
	}

	
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
			main_gate(SERVO_DEG_180);
			_delay_ms(5000);
			main_gate(SERVO_DEG_0);

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

ISR (INT0_vect){
	cli();
	action=recvdata();
	LCD_clearScreen();
	switch(action)
	{
		case 0:
		LCD_displayString("open gate");
		LCD_goToRowColumn(1,0);
		LCD_intgerToString(action);
		main_gate(SERVO_DEG_180);
		_delay_ms(1000);
		break;
		
		case 1:
		LCD_displayString("close gate");
		LCD_goToRowColumn(1,0);
		LCD_intgerToString(action);
		main_gate(SERVO_DEG_0);
		_delay_ms(1000);
		break;
		
		case 2:
		LCD_displayString("open pool");
		LCD_goToRowColumn(1,0);
		LCD_intgerToString(action);
		open(_poolPORT,_poolpin);
		_delay_ms(1000);
		break;
		
		case 3:
		LCD_displayString("close pool");
		LCD_goToRowColumn(1,0);
		LCD_intgerToString(action);
		close(_poolPORT,_poolpin);
		_delay_ms(1000);
		break;
		
		case 4:
		LCD_displayString("open living light");
		LCD_goToRowColumn(1,0);
		LCD_intgerToString(action);
		open(_livingPORT,_livingpin);
		_delay_ms(1000);
		break;
		
		case 5:
		LCD_displayString("close living light");
		LCD_goToRowColumn(1,0);
		LCD_intgerToString(action);
		close(_livingPORT,_livingpin);
		_delay_ms(1000);
		break;
		
		case 6:
		LCD_displayString("open alarm");
		LCD_goToRowColumn(1,0);
		LCD_intgerToString(action);
		open(_alarmPORT,_alarmpin);
		_delay_ms(1000);
		break;
		
		case 7:
		LCD_displayString("close alarm");
		LCD_goToRowColumn(1,0);
		LCD_intgerToString(action);
		close(_alarmPORT,_alarmpin);
		_delay_ms(1000);
		break;
		
		case 8:
		LCD_displayString("open indoor");
		LCD_goToRowColumn(1,0);
		LCD_intgerToString(action);
		open(_inDoorPORT,_inDoorpin);
		_delay_ms(1000);
		break;
		
		case 9:
		LCD_displayString("close indoor");
		LCD_goToRowColumn(1,0);
		LCD_intgerToString(action);
		close(_inDoorPORT,_inDoorpin);
		_delay_ms(1000);
		break;
		
		
		
		
		
	}
	sei();
}