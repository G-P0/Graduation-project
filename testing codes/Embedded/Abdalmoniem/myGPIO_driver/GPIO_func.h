

/*GPIO myGPIO_Digital_Input function that set a selected pin to set 01 on the
 * moder register for it */

void myGPIO_Digital_Output(unsigned long *port, uint16_t pin_mask) {
  uint8_t i;
  /* Go through all the 16 pins */
  for (i = 0x00; i < 0x10; i++) {
    /* Pin is set - find the pin that should be masked */
    if (pin_mask & (1 << i)) {
      /* Set 01 bits combination for output selected bit by puting (00|01) on *
       * selected two bits */
      *port = (*port & ~(0x03 << (2 * i))) | (0x01 << (2 * i));
    }
  }
}

/*GPIO myGPIO_Digital_Output function that set a selected pin to set 00 on the
 * moder register for it */
void myGPIO_Digital_Input(unsigned long *port, unsigned long pin_mask) {
  uint8_t i;
  /* Go through all the 16 pins */
  for (i = 0x00; i < 0x10; i++) {
    /* Pin is set - find the pin that should be masked */
    if (pin_mask & (1 << i)) {
      /* Set 01 bits combination for output selected bit by puting (00) on
       * selected two bits */
      *port &=  ~(0x03 << (2 * i)));
    }
  }
}

/*GET   port number A=0 B=1 .....*/
#define myGPIO_PORT_NUMBER(GPIOx) ( ((uint32_t)GPIOx - (GPIOA_BASE)) / ((GPIOB_BASE) - (GPIOA_BASE)) )

/*enable clk for port x*/
#define myGPIO_ENABLE_CLK(GPIOx) (RCC_AHB1ENR |= (1 << myGPIO_PORT_NUMBER(GPIOx)))
/*disable clk for port x*/
#define myGPIO_DISABLE_CLK(GPIOx) (RCC_AHB1ENR &= ~(1 << myGPIO_PORT_NUMBER(GPIOx)))

/*set selected bit on pin mask to the BSRR low (0-15) bits to set the pin on ODA*/
#define myGPIO_SET_PIN(GPIOx,GPIO_PIN_MASK) ((GPIOx+myGPIOx_OFFSET_BSRRL)=GPIO_PIN_MASK)

/*set selected bit on pin mask to the BSRR low (16-31) bits to reset the pin on ODA*/
#define myGPIO_RESET_PIN(GPIOx,GPIO_PIN_MASK) ((GPIOx+myGPIOx_OFFSET_BSRRH)=GPIO_PIN_MASK)

/*set a selected bit on mask and test the value of the mask if 0 use rest pin if 1 use set pin */
#define myGPIO_SET_PIN_VALUE ( GPIOx, GPIO_PIN_MASK, VALUE ) ( VALUE ? myGPIO_SET_PIN ( GPIOX,GPIO_PIN_MASK ) : myGPIO_RESET_PIN ( GPIOX, GPIO_PIN_MASK ))

/*set selected bit in pin mask to toggle the value of the same bit on ODR*/
#define myGPIOI_TOGGLE_PIN(GPIOx,PIN_MASK) ((GPIOx+myGPIOx_OFFSET_ODR)^=PIN_MASK)
