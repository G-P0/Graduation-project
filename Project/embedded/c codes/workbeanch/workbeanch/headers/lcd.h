/*
 * lcd.h
 *
 * Created: 3/26/2018 4:24:22 PM
 *  Author: zaian
 */ 


#ifndef LCD_H_
#define LCD_H_

#include "common_macros.h"
#include "micro_config.h"

/* LCD Data bits mode configuration */
#define DATA_BITS_MODE 4

/* Use higher 4 bits in the data port */
#if (DATA_BITS_MODE == 4)
#define UPPER_PORT_PINS
#endif

/* LCD HW Pins */
#define RS PD0
#define RW PD1
#define E  PD3
#define LCD_CTRL_PORT PORTD
#define LCD_CTRL_PORT_DIR DDRD
#define LCD_DATA_PORT PORTA
#define LCD_DATA_PORT_DIR DDRA

/* LCD Commands */
#define CLEAR_COMMAND 0x01
#define LCD_FOUR_BITS_DATA_MODE 0x02
#define LCD_FOUR_BIT_ONE_LINE_MODE 0x20
#define LCD_FOUR_BIT_TWO_LINE_MODE 0x28
#define LCD_Eight_BIT_ONE_LINE_MODE 0x30
#define LCD_Eight_BIT_TWO_LINE_MODE 0x38	
#define CURSOR_OFF 0x0C
#define CURSOR_ON 0x0E
#define DDRAM_CURSOR_LOCATION 0x80
#define MOVE_CURSOR_LEFT 0x10
#define MOVE_CURSOR_RIGHT 0x14
#define SHIFT_DISPLAY_LEFT 0x18
#define SHIFT_DISPLAY_RIGHT 0x1c
#define DISPLAY_OFF 0x08
#define DISPLAY_ON 0x0C


void LCD_sendCommand(uint8_t command);
void LCD_displayCharacter(uint8_t data);
void LCD_displayString(const char *Str);
void LCD_init(void);
void LCD_clearScreen(void);
void LCD_displayStringRowColumn(uint8_t row,uint8_t col,const char *Str);
void LCD_goToRowColumn(uint8_t row,uint8_t col);
void LCD_intgerToString(int data);

#endif /* LCD_H_ */
