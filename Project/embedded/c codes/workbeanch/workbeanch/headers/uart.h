/*
 * uart.h
 *
 * Created: 3/29/2018 4:24:02 PM
 *  Author: zaian
 */ 


#ifndef UART_H_
#define UART_H_

#include "micro_config.h"
#include "common_macros.h"






/* deceleration of UART functions  */
void UART_init(uint16_t baud_rate);
void UART_send_char(char data);
char UART_receive_char();
void UART_send_string(char *data);
char *UART_receive_string();

#endif /* UART_H_ */