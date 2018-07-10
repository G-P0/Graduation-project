/*
* uart.c
*
* Created: 3/29/2018 4:24:16 PM
*  Author: zaian
*/

#include "uart.h"

/* initialize UART without interrupt funtions */
void UART_init(uint16_t baud_rate)
{
	uint16_t UBRR_Value = lrint ( (F_CPU / (16L * baud_rate) ) -1);  /* calculate the value of UBRR (f/16*baudrate)-1 */
	//UCSRA |=(1<<U2X);
	UBRR_Value= 51;
	UBRRH = (uint8_t) (UBRR_Value >> 8);
	UBRRL = (uint8_t) UBRR_Value;
	UCSRB = (1<<RXEN) | (1<<TXEN); /* enable send and recive data using UART */
	UCSRC |= (3<<UCSZ0); /* determine number of bits : here 8 UCSZ0-> 1  UCSZ1-> 1, UCSZ2 in UCSRB is defualt 1*/
	//UCSRC |= (1<<USBS); // two stop bits
}

/* send one char using UART */
void UART_send_char(char data)
{
	while(!BIT_IS_SET(UCSRA,UDRE)); /*wait till UDRE is set i.e device ready to send data */
	UDR = data;
}

/* receive one char using UART */
char UART_receive_char()
{
	while (! BIT_IS_SET(UCSRA,RXC) ); /* wait till RXC is set i.e the data already received  */
	return UDR;
}

/* send string using UART */
void UART_send_string(char *data)
{
	
	while(*data != '\0')
	UART_send_char(*data++); /*send the content of data pointer then increament the pointer itself*/
	UART_send_char('\0');
}


/*
*@bug
*/

void UART_receive_string14(char* data)
{
	
	//char *data=;//size of data must be allocated
	int i=0;
	for (i=0;i<14;i++)
	{
		
		data[i]=UART_receive_char();
	}
}
