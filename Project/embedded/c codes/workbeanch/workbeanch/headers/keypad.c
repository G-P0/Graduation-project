/*
 * keypad.c
 *
 * Created: 3/27/2018 7:41:57 PM
 *  Author: zaian
 */ 

#include "keypad.h"

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

/************************** Functions Definitions **********************/
uint8_t KeyPad_getPressedKey(void){
	uint8_t col,row;
	while(1)
	{
		for(col=0;col<N_col;col++) /* loop for columns */
		{
			/*
			 * each time only one of the column pins will be output and
			 * the rest will be input pins include the row pins
			 */
			KEYPAD_PORT_DIR = (0b11110000);

			/*
			 * clear the output pin column in this trace and enable the internal
			 * pull up resistors for the rows pins
			 */
			KEYPAD_PORT_OUT = (~(0b00010000<<col));
			for(row=0;row<N_row;row++) /* loop for rows */
			{
				if(BIT_IS_CLEAR(KEYPAD_PORT_IN,row)) /* if the switch is press in this row */
				{	while(BIT_IS_CLEAR(KEYPAD_PORT_IN,row));/* will active when you release the button*/
					#if (N_col == 3)
						return KeyPad_4x3_adjustKeyNumber((row*N_col)+col+1);
					#elif (N_col == 4)
						return KeyPad_4x4_adjustKeyNumber((row*N_col)+col+1);
					#endif
				}
			}
		}
	}
}

#if (N_col == 3)

static uint8_t KeyPad_4x3_adjustKeyNumber(uint8_t button_number)
{
	switch(button_number)
	{
		case 10: return '*'; // ASCII Code of =
				 break;
		case 11: return 0;
				 break;
		case 12: return '#'; // ASCII Code of +
				 break;
		default: return button_number;
	}
}

#elif (N_col == 4)

static uint8_t KeyPad_4x4_adjustKeyNumber(uint8_t button_number)
{
	switch(button_number)
	{
		case 1: return '1';
				break;
		case 2: return '2';
				break;
		case 3: return '3';
				break;
		case 4: return 'a'; /* ASCII Code of 'a' */
				break;
		case 5: return '4';
				break;
		case 6: return '5';
				break;
		case 7: return '6';
				break;
		case 8: return 'b'; /* ASCII Code of 'b' */
				break;
		case 9: return '7';
				break;
		case 10: return '8';
				break;
		case 11: return '9';
				break;
		case 12: return 'c'; /* ASCII Code of 'c' */
				break;
		case 13: return '*';  /* ASCII of '*' */
				break;
		case 14: return '0';
				break;
		case 15: return '#'; /* ASCII Code of '#' */
				break;
		case 16: return 'd'; /* ASCII Code of 'd' */
				break;
		default: return button_number;
	}
}
#endif