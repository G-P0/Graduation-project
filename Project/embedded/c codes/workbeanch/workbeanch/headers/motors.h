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
/************************************************************************/
/*	stepper motors                                                                     */
/************************************************************************/

#define STEP_ANGLE 5.625f
#define STEPPER_MOTOR_RATIO 64.0f
#define STEPPER_MOTOR_STEP_ANLGE ( STEP_ANGLE / STEPPER_MOTOR_RATIO )
#define Deg45 ((uint16_t)( 45.0f / STEPPER_MOTOR_STEP_ANLGE ))
#define Deg90 ((uint16_t)( 90.0f / STEPPER_MOTOR_STEP_ANLGE ))
#define Deg180 ((uint16_t)( 180.0f /STEPPER_MOTOR_STEP_ANLGE ))
#define Deg270 ((uint16_t)( 270.0f /STEPPER_MOTOR_STEP_ANLGE ))
#define Deg360 ((uint16_t)( 360.0f /STEPPER_MOTOR_STEP_ANLGE ))

#define STEPPER_MOTOR_PORT PORTC
#define STEPPER_MOTOR_DDR DDRC
#define STEPPER_MOTOR_PIN_1 PC0
#define STEPPER_MOTOR_PIN_2 PC1
#define STEPPER_MOTOR_PIN_3 PC2
#define STEPPER_MOTOR_PIN_4 PC3



void stepper_motor_RL(uint16_t deg);
void stepper_motor_RR(uint16_t deg);
void stepper_motor_init();


/************************************************************************/
/*						servo motors                                                                     */
/************************************************************************/

#define SERVO_OUT_PIN PD5
#define SERVO_OUT_PORT_DIR DDRD

#define  SERVO_DEG_180 306
#define  SERVO_DEG_90  187
#define	 SERVO_DEG_0   62.5

void Timer1_Fast_PWM_init();
void Timer1_Fast_PWM_rotate(unsigned short duty_cycle);
void Timer1_Fast_PWM_stop();

#define main_gate(x) Timer1_Fast_PWM_rotate(x)




#endif /* MOTORS_H_ */