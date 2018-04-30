
/*
 * temp.c
 *
 * Created: 4/17/2018 6:12:59 PM
 *  Author: zaian
 */ 
#include "ADCFunc.h"



uint8_t get_temperture(){
	ADC_init();
	ADC_select_channel(temp_pin);
	ADC_start_conversion();
	return (ADC_read()/temp_factor);
}


//LDR

uint8_t get_LDR()
{
	ADC_init();
	ADC_select_channel(LDR_PIN);
	ADC_start_conversion();
	return (ADC_read());
}