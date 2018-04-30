
/*
* ADC.h
*
* Created: 4/17/2018 4:06:57 PM
*  Author: zaian
*/
#include "common_macros.h"
#include "micro_config.h"


#define ADC_port_DD DDRA
#define ADC_port PORTA
#define ADC_defualt_channel PA0
#define ADC_data_leftAjust 1
#define ADC_ATE 0
#define ADC_enableInterrupt 0
#define ADC_prescaler 128

#define ADC_ref 0b11

#if (ADC_ref == 0b11)
#define ADC_resoultion 2.5f
#endif
// trigger source



void ADC_init();
void ADC_start_conversion();
void ADC_set_prescaler(uint8_t perscaler);
uint16_t ADC_read();
void ADC_select_channel(uint8_t channel);