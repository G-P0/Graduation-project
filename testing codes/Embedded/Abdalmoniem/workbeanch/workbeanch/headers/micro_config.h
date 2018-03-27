/*
 * micro_config.h
 *
 * Created: 3/26/2018 4:26:34 PM
 *  Author: zaian
 */ 


#ifndef MICRO_CONFIG_H_
#define MICRO_CONFIG_H_

#ifndef F_CPU
#define F_CPU 1000000UL //1MHz Clock frequency
#endif

#include <avr/io.h>
#include <avr/interrupt.h>
#include <util/delay.h>
#include <inttypes.h>
#include <stdlib.h> /* for itoa function*/



#endif /* MICRO_CONFIG_H_ */