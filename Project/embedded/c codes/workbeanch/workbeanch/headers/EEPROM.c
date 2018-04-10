/*
* EEPROM.c
*
* Created: 4/8/2018 4:33:02 PM
*  Author: zaian
*/


#include "EEPROM.h"

/* EEPROM write Byte into EEPROM at specific address */
void EEPROM_write(uint16_t uiAddress, uint8_t ucData)
{
	/* Wait for completion of previous write */
	while(!BIT_IS_CLEAR(EECR,EEWE));
	;
	/* Set up address and data registers */
	EEAR = uiAddress;
	EEDR = ucData;
	/* Write logical one to EEMWE */
	SET_BIT(EECR,EEMWE);
	/* Start eeprom write by setting EEWE */
	SET_BIT(EECR,EEWE);
}

/* EEPROM read Byte from EEPROM at specific address */
uint8_t EEPROM_read(uint16_t uiAddress)
{
	/* Wait for completion of previous write */
	while(!BIT_IS_CLEAR(EECR,EEWE));
	;
	/* Set up address register */
	EEAR = uiAddress;
	/* Start eeprom read by writing EERE */
	SET_BIT(EECR,EERE);
	/* Return data from data register */
	return EEDR;
}


/* EEPROM write N number of Bytes into EEPROM at specific address */
void EEPROM_WriteNByte(uint16_t uiAddress, uint8_t *ucData,uint16_t uiNumberOfBytes)
{
	
	while(uiNumberOfBytes!=0){
		EEPROM_write(uiAddress,*ucData);
		ucData++;
		uiAddress++;
		uiNumberOfBytes--;
	}
}
/* EEPROM read N number of Bytes from EEPROM at specific address and copy it into ucDataRam pointer */

void EEPROM_readNByte(uint16_t uiAddress,uint8_t *ucDataRam,uint16_t uiNumberOfBytes){
	
	while (uiNumberOfBytes!=0){
		*ucDataRam=EEPROM_read(uiAddress);
		uiAddress++;
		ucDataRam++;
		uiNumberOfBytes--;
	}
}

/* EEPROM write string into EEPROM at specific address */
void EEPROM_writeString(uint16_t uiAddress, uint8_t *ucData){
	
	do{
		EEPROM_write(uiAddress,*ucData);
		ucData++;
		uiAddress++;
	}while((*(ucData-1)) =! 0);
}

/* EEPROM read string from EEPROM at specific address */
void EEPROM_readString(uint16_t uiAddress, uint8_t *ucDataRam){
	do 
	{
		*ucDataRam=EEPROM_read(uiAddress);
		uiAddress++;
		ucDataRam++;
	} while ((*(ucDataRam-1))!='\0');
}