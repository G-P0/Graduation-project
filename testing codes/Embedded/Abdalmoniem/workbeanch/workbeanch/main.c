/*
* workbeanch.c
*
* Created: 3/27/2018 10:13:09 PM
* Author : zaian
*/

#include "headers/lcd.h"
#include "headers/keypad.h"
#include <string.h>
int main(void)
{
	LCD_init();
	
	char key,i,flag=0;
	char psswrd[5];
	while (1)
	{
		LCD_displayString("enter the psswrd");
		LCD_displayStringRowColumn(1,0,"psswrd: ");
		LCD_goToRowColumn(1,8);
		i=0;
		psswrd[0]='\0';
		while(1)
		{
			
			
			key=KeyPad_getPressedKey();
			psswrd[i%4]= key;
			psswrd[(i%4)+1]='\0';
			i++;
			
			LCD_goToRowColumn(1,8);
			LCD_displayString(psswrd);
			if(i>=4){
				_delay_ms(500);
				LCD_clearScreen();
				if (!strcmp(psswrd,"1234"))
				{
					LCD_displayString("successful :D");
					flag=1;
					break;
					}else{
					LCD_displayString("WRONG PSSWRD :(");
					LCD_displayStringRowColumn(1,3,"try again");
					_delay_ms(2000);
					LCD_clearScreen();
					break;
				}
			}
			
		}
		if (flag) break;

		
		
	}
}

