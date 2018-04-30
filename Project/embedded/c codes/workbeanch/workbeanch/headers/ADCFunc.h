
/*
 * temp.h
 *
 * Created: 4/17/2018 6:12:43 PM
 *  Author: zaian
 */ 

#include "common_macros.h"
#include "micro_config.h"
#include "ADC.h"

//temp
#define temp_pin PA0
#define sensor_step 10.0f
#define temp_factor (sensor_step/ADC_resoultion)

uint8_t get_temperture();


//LDR

#define LDR_PIN PA1

uint8_t get_LDR();