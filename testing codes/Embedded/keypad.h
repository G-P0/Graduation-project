/*
 * keybad.h
 *
 *  Created on: ??þ/??þ/????
 *      Author: Khalid
 */

#ifndef KEYBAD_H_
#define KEYBAD_H_

#include "types.h"
#include "micro_config.h"
#include "common_macros.h"

/************************** Module Configurations **********************/

/* Keypad configurations for number of rows and columns */
#define N_col 3
#define N_row 4

/* Keypad Port Configurations */
#define KEYPAD_PORT_OUT PORTA
#define KEYPAD_PORT_IN  PINA
#define KEYPAD_PORT_DIR DDRA

/************************** Functions Prototypes ***********************/

/*
 * Function responsible for getting the pressed keypad key
 */
uint8 KeyPad_getPressedKey(void);


#endif /* KEYBAD_H_ */
