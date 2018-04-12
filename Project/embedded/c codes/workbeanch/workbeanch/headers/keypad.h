/*
 * keypad.h
 *
 * Created: 3/27/2018 7:40:57 PM
 *  Author: zaian
 */ 


#ifndef KEYPAD_H_
#define KEYPAD_H_

#include "micro_config.h"
#include "common_macros.h"

/************************** Module Configurations **********************/

/* Keypad configurations for number of rows and columns */
#define N_col 4
#define N_row 4

/* Keypad Port Configurations */
#define KEYPAD_PORT_OUT PORTB
#define KEYPAD_PORT_IN  PINB
#define KEYPAD_PORT_DIR DDRB

/************************** Functions Prototypes ***********************/

/*
 * Function responsible for getting the pressed keypad key
 */
uint8_t KeyPad_getPressedKey(void);




#endif /* KEYPAD_H_ */