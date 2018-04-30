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
#define WITH_IC_74922 1
#define KEYPAD_UPPER_PORT_PINS 1

/* Keypad Port Configurations */
#define KEYPAD_PORT_OUT PORTB
#define KEYPAD_PORT_IN  PINB
#define KEYPAD_PORT_DIR DDRB

/************************** Functions Prototypes ***********************/

/*
 * Function responsible for getting the pressed keypad key
 */
uint8_t KeyPad_getPressedKey(void);

#if ( 0 == WITH_IC_74922 )
/***** Function Prototypes for keypad internal (private) functions *****/
#if (N_col == 3)
/*
* Function responsible for mapping the switch number in the keypad to
* its corresponding functional number in the proteus for 4x3 keypad
*/
static uint8_t KeyPad_4x3_adjustKeyNumber(uint8_t button_number);
#elif (N_col == 4)
/*
* Function responsible for mapping the switch number in the keypad to
* its corresponding functional number in the proteus for 4x4 keypad
*/
static uint8_t KeyPad_4x4_adjustKeyNumber(uint8_t button_number);
#endif

#else
static uint8_t KeyPad_4x4_withIC74922(uint8_t button_number);
#endif


#endif /* KEYPAD_H_ */