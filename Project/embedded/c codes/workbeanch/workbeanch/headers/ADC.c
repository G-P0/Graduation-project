
/*
* ADC.c
*
* Created: 4/17/2018 4:07:13 PM
*  Author: zaian
*/
#include "ADC.h"

/************************************************************************/
/*                                                                      */
/************************************************************************/
void ADC_init(){
	
	CLEAR_BIT (ADC_port_DD,ADC_defualt_channel);					//set channel pin to be input
	ADMUX &=~(0x1f);
	ADMUX |= ADC_defualt_channel & 0xFF;						// select channel using MUX0-4 bits
	ADMUX |= (ADC_ref << 6);									// set ref at pin 7 6 of ADMUX
	ADC_set_prescaler(ADC_prescaler);							// set prescaler
	#if (1 == ADC_data_leftAjust)
	ADMUX |=(ADC_data_leftAjust<<ADLAR)		;					// adjust data for left
	#endif
	
}

void ADC_start_conversion(){
	SET_BIT (ADCSRA,ADEN);										// enable ADC
	SET_BIT(ADCSRA,ADSC);										//start conversion
}

void ADC_set_prescaler(uint8_t prescaler){
	ADCSRA &=~(0x07);									// reset  ADPS0-2 pins
	switch(prescaler)
	{
		case 2:
		ADCSRA |= (0x01);
		break;
		case 4:
		ADCSRA |= (0x02);
		break;
		case 8:
		ADCSRA |= (0x03);
		break;
		case 16:
		ADCSRA |= (0x04);
		break;
		case 32:
		ADCSRA |= (0x05);
		break;
		case 64:
		ADCSRA |= (0x06);
		break;
		case 128:
		ADCSRA |= (0x07);
		break;
		default:
		ADCSRA |= (0x00);
		break;
	}
}

uint16_t ADC_read()
{
	uint16_t result;
	while(BIT_IS_SET(ADCSRA,ADSC));
	#if (1 == ADC_data_leftAjust)
	result= ((0xFFFF & ADCH)<<2);
	return result;
	#else
	result =ADCL;
	result |=(0xffff&ADCH)<<8;
	return result;
	#endif
}

void ADC_select_channel(uint8_t channel){
			CLEAR_BIT (ADC_port_DD,channel) ;
			ADMUX &= ~(0x1f) ;
			ADMUX |= ( 0xff & channel );
}