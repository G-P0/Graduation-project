/*
 * CFile1.c
 *
 * Created: 4/9/2018 9:07:57 PM
 *  Author: zaian
 */ 
#include "micro_config.h"

void xy (void){
	DDRA&=~(1<<3);
	DDRD|=(1<<2);
	PORTD|=(1<<2);
	ADMUX&=~(1<<7);
	ADMUX&=~(1<<6);
	ADMUX|=(1<<1)|(1<<0);
	uint16_t adc_out;
	ADCSRA|=(1<<7);
	while(1){

		ADCSRA|=(1<<6);
		_delay_ms(500);
		adc_out=ADCL;
		adc_out+=((ADCH|0x0000)<<8);
		if(adc_out<100)
		PORTD&=~(1<<2);
		else
		PORTD|=(1<<2);
	}
}