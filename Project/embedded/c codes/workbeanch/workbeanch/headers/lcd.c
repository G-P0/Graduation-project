/*
* lcd.c
*
* Created: 3/26/2018 4:18:21 PM
*  Author: zaian
*/


#include "lcd.h"

void LCD_init(void)
{
	LCD_CTRL_PORT_DIR |= (1<<E) | (1<<RS) | (1<<RW); /* Configure the control pins(E,RS,RW) as output pins */
	
	#if (DATA_BITS_MODE == 4)
	#ifdef UPPER_PORT_PINS
	LCD_DATA_PORT_DIR |= 0xF0; /* Configure the highest 4 bits of the data port as output pins */
	#else
	LCD_DATA_PORT_DIR |= 0x0F; /* Configure the lowest 4 bits of the data port as output pins */
	#endif
	LCD_sendCommand(LCD_FOUR_BITS_DATA_MODE); /* initialize LCD in 4-bit mode */
	LCD_sendCommand(LCD_FOUR_BIT_TWO_LINE_MODE); /* use 2-line lcd + 4-bit Data Mode + 5*7 dot display Mode */
	#elif (DATA_BITS_MODE == 8)
	LCD_DATA_PORT_DIR = 0xFF; /* Configure the data port as output port */
	LCD_sendCommand(LCD_Eight_BIT_TWO_LINE_MODE); /* use 2-line lcd + 8-bit Data Mode + 5*7 dot display Mode */
	#endif
	
	LCD_sendCommand(CURSOR_OFF); /* cursor off */
	LCD_sendCommand(CLEAR_COMMAND); /* clear LCD at the beginning */
	LCD_sendCommand(DISPLAY_ON);/* make sure that lcd is on*/
}

void LCD_sendCommand(uint8_t command)
{
	CLEAR_BIT(LCD_CTRL_PORT,RS);					/* Instruction Mode RS=0 */
	CLEAR_BIT(LCD_CTRL_PORT,RW);					/* write data to LCD so RW=0 */
	_delay_ms(1);									/* delay for processing Tas = 50ns */
	SET_BIT(LCD_CTRL_PORT,E);						/* Enable LCD E=1 */
	_delay_ms(1);									/* delay for processing Tpw - Tdsw = 190ns */
	#if (DATA_BITS_MODE == 4)
	/* out the highest 4 bits of the required command to the data bus D4 --> D7 */
	#ifdef UPPER_PORT_PINS							/* if the higher pins in lcd is used */
	LCD_DATA_PORT = (command & 0xF0);
	#else
	/* out the highest 4 bits of the required command to the data bus D0 --> D3 */
	LCD_DATA_PORT = ((command >> 4) & 0x0F);
	#endif

	_delay_ms(1);			/* delay for processing Tdsw = 100ns */
	CLEAR_BIT(LCD_CTRL_PORT,E); /* disable LCD E=0 */
	_delay_ms(1); /* delay for processing Th = 13ns */
	SET_BIT(LCD_CTRL_PORT,E); /* Enable LCD E=1 */
	_delay_ms(1); /* delay for processing Tpw - Tdws = 190ns */

	/* out the lowest 4 bits of the required command to the data bus D4 --> D7 */
	#ifdef UPPER_PORT_PINS
	LCD_DATA_PORT = (command << 4) & 0xF0;
	#else
	/* out the lowest 4 bits of the required command to the data bus D0 --> D3 */
	LCD_DATA_PORT = (command & 0x0F);
	#endif
	_delay_ms(1); /* delay for processing Tdsw = 100ns */
	CLEAR_BIT(LCD_CTRL_PORT,E); /* disable LCD E=0 */
	_delay_ms(1); /* delay for processing Th = 13ns */
	
	
	#elif (DATA_BITS_MODE == 8)
	LCD_DATA_PORT = command; /* out the required command to the data bus D0 --> D7 */
	_delay_ms(1); /* delay for processing Tdsw = 100ns */
	CLEAR_BIT(LCD_CTRL_PORT,E); /* disable LCD E=0 */
	_delay_ms(1); /* delay for processing Th = 13ns */
	
	#else
	/* bit mode is neither 8 or 4*/
	#error "data bit mode should be 8 or 4"
	#endif
}

void LCD_displayCharacter(uint8_t data)
{
	SET_BIT(LCD_CTRL_PORT,RS); /* Data Mode RS=1 */
	CLEAR_BIT(LCD_CTRL_PORT,RW); /* write data to LCD so RW=0 */
	_delay_ms(1); /* delay for processing Tas = 50ns */
	SET_BIT(LCD_CTRL_PORT,E); /* Enable LCD E=1 */
	_delay_ms(1); /* delay for processing Tpw - Tdws = 190ns */
	#if (DATA_BITS_MODE == 4)
	/* out the highest 4 bits of the required command to the data bus D4 --> D7 */
	#ifdef UPPER_PORT_PINS
	LCD_DATA_PORT = (data & 0xF0);
	#else
	LCD_DATA_PORT = ((data >> 4) & 0x0F);
	#endif

	_delay_ms(1); /* delay for processing Tdsw = 100ns */
	CLEAR_BIT(LCD_CTRL_PORT,E); /* disable LCD E=0 */
	_delay_ms(1); /* delay for processing Th = 13ns */
	SET_BIT(LCD_CTRL_PORT,E); /* Enable LCD E=1 */
	_delay_ms(1); /* delay for processing Tpw - Tdws = 190ns */

	/* out the lowest 4 bits of the required data to the data bus D4 --> D7 */
	#ifdef UPPER_PORT_PINS
	LCD_DATA_PORT = (data << 4) & 0xF0;
	#else
	LCD_DATA_PORT = (data & 0x0F);
	#endif
	
	_delay_ms(1); /* delay for processing Tdsw = 100ns */
	CLEAR_BIT(LCD_CTRL_PORT,E); /* disable LCD E=0 */
	_delay_ms(1); /* delay for processing Th = 13ns */
	#elif (DATA_BITS_MODE == 8)
	LCD_DATA_PORT = data; /* out the required data to the data bus D0 --> D7 */
	_delay_ms(1); /* delay for processing Tdsw = 100ns */
	CLEAR_BIT(LCD_CTRL_PORT,E); /* disable LCD E=0 */
	_delay_ms(1); /* delay for processing Th = 13ns */
	#endif
}

void LCD_displayString(const char *Str)
{
	while((*Str) != '\0')
	{
		LCD_displayCharacter(*Str);
		Str++;
	}
	
	/***************** Another Method ***********************
	the above save data space of i
	uint8_t i = 0;
	while(Str[i] != '\0')
	{
	LCD_displayCharacter(Str[i]);
	i++;
	}
	*********************************************************/
}

void LCD_goToRowColumn(uint8_t row,uint8_t col)
{
	uint8_t Address;
	
	/* first of all calculate the required address */
	switch(row)
	{
		/* only first 2 cases for lcd 2*16 and second 2 for 4*16 */
		case 0:
		Address=col;
		break;
		case 1:
		Address=col+0x40;
		break;
		
		case 2:
		Address=col+0x10;
		break;
		case 3:
		Address=col+0x50;
		break;
		
		default:
		Address=col;
	}
	/* to write to a specific address in the LCD
	* we need to apply the corresponding command 0b10000000+Address */
	
	LCD_sendCommand(Address | DDRAM_CURSOR_LOCATION);
}

void LCD_displayStringRowColumn(uint8_t row,uint8_t col,const char *Str)
{
	LCD_goToRowColumn(row,col); /* go to to the required LCD position */
	LCD_displayString(Str); /* display the string */
}

void LCD_intgerToString(int data)
{
	char buff[16]; /* String to hold the ascii result */
	itoa(data,buff,10); /* itoa convert int to char, 10 for decimal */
	LCD_displayString(buff);
}



void LCD_clearScreen(void)
{
	LCD_sendCommand(CLEAR_COMMAND); //clear display
}
