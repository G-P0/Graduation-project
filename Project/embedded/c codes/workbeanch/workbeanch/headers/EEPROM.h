/*
 * EEPROM.h
 *
 * Created: 4/8/2018 4:33:19 PM
 *  Author: zaian
 */ 


#ifndef EEPROM_H_
#define EEPROM_H_

#include "micro_config.h"
#include "common_macros.h"

void EEPROM_write(uint16_t uiAddress, uint8_t ucData);
uint8_t EEPROM_read(uint16_t uiAddress);
void EEPROM_WriteNByte(uint16_t uiAddress, uint8_t *ucData,uint16_t uiNumberOfBytes);
void EEPROM_readNByte(uint16_t uiAddress,uint8_t *ucDataRam,uint16_t uiNumberOfBytes);
void EEPROM_writeString(uint16_t uiAddress, uint8_t *ucData);
void EEPROM_readString(uint16_t uiAddress, uint8_t *ucDataRam);


#endif /* EEPROM_H_ */