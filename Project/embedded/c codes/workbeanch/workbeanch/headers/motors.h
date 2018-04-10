/*
 * motors.h
 *
 * Created: 4/9/2018 9:09:44 PM
 *  Author: zaian
 */ 

#include "common_macros.h"
#include "micro_config.h"

#ifndef MOTORS_H_
#define MOTORS_H_

#define Gate_open()  Timer1_Fast_PWM_Init(187) 
#define Gate_close() Timer1_Fast_PWM_Init(124);



void Timer1_Fast_PWM_Init(unsigned short duty_cycle);



#endif /* MOTORS_H_ */