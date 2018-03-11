/*Control registers ADDRESSES*/
#define myRCC_BASE 0x40023800

/*myGPIO BASE ADDRESSES */
#define myGPIOA_BASE 0X40020000
#define myGPIOB_BASE 0X40020400
#define myGPIOC_BASE 0X40020800
#define myGPIOD_BASE 0X40020C00
#define myGPIOE_BASE 0X40021000
#define myGPIOF_BASE 0X40021400
#define myGPIOG_BASE 0X40021800
#define myGPIOH_BASE 0X40021C00
#define myGPIOI_BASE 0X40022000

/*myGPIOx_OFFSETS*/
#define myGPIOx_OFFSET_MODER 0x00
#define myGPIOx_OFFSET_OTYPER 0x04
#define myGPIOx_OFFSET_IDR 0x10
#define myGPIOx_OFFSET_ODR 0x14
#define myGPIOx_OFFSET_BSRR 0x18
#define myGPIOx_OFFSET_BSRRL 0x18
#define myGPIOx_OFFSET_BSRRH 0x1A

/*RCC offsets*/
#define myRCC_OFFSET_AHB1ENR 0x30

/* myGPIO Registers */
#define myGPIOA (*(volatile uint32_t *) (myGPIOA_BASE)
#define myGPIOB (*(volatile uint32_t *) (myGPIOB_BASE)
#define myGPIOC (*(volatile uint32_t *) (myGPIOC_BASE)
#define myGPIOD (*(volatile uint32_t *) (myGPIOD_BASE)
#define myGPIOE (*(volatile uint32_t *) (myGPIOE_BASE)
#define myGPIOF (*(volatile uint32_t *) (myGPIOF_BASE)
#define myGPIOG (*(volatile uint32_t *) (myGPIOG_BASE)
#define myGPIOH (*(volatile uint32_t *) (myGPIOH_BASE)
#define myGPIOI (*(volatile uint32_t *) (myGPIOI_BASE)

/* myRCC Registers */
#define myRCC (*(volatile uint32_t *) (myRCC_BASE))

/* myGPIO Registers with thier own offsets*/

#define myGPIOA_MODER   (*(volatile uint32_t *) (myGPIOA_BASE + myGPIOx_OFFSET_MODER))
#define myGPIOA_OTYPER  (*(volatile uint32_t *) (myGPIOA_BASE + myGPIOx_OFFSET_OTYPER))
#define myGPIOA_IDR     (*(volatile uint32_t *) (myGPIOA_BASE + myGPIOx_OFFSET_IDR))
#define myGPIOA_ODR     (*(volatile uint32_t *) (myGPIOA_BASE + myGPIOx_OFFSET_ODR))
#define myGPIOA_BSRR    (*(volatile uint32_t *) (myGPIOA_BASE + myGPIOx_OFFSET_BSRR))
#define myGPIOA_BSRRL    (*(volatile uint32_t *) (myGPIOA_BASE + myGPIOx_OFFSET_BSRRL))
#define myGPIOA_BSRRH    (*(volatile uint32_t *) (myGPIOA_BASE + myGPIOx_OFFSET_BSRRH))

#define myGPIOB_MODER   (*(volatile uint32_t *) (myGPIOB_BASE + myGPIOx_OFFSET_MODER))
#define myGPIOB_OTYPER  (*(volatile uint32_t *) (myGPIOB_BASE + myGPIOx_OFFSET_OTYPER))
#define myGPIOB_IDR     (*(volatile uint32_t *) (myGPIOB_BASE + myGPIOx_OFFSET_IDR))
#define myGPIOB_ODR     (*(volatile uint32_t *) (myGPIOB_BASE + myGPIOx_OFFSET_ODR))
#define myGPIOB_BSRR    (*(volatile uint32_t *) (myGPIOB_BASE + myGPIOx_OFFSET_BSRR))
#define myGPIOB_BSRRL    (*(volatile uint32_t *) (myGPIOB_BASE + myGPIOx_OFFSET_BSRRL))
#define myGPIOB_BSRRH    (*(volatile uint32_t *) (myGPIOB_BASE + myGPIOx_OFFSET_BSRRH))

#define myGPIOC_MODER   (*(volatile uint32_t *) (myGPIOC_BASE + myGPIOx_OFFSET_MODER))
#define myGPIOC_OTYPER  (*(volatile uint32_t *) (myGPIOC_BASE + myGPIOx_OFFSET_OTYPER))
#define myGPIOC_IDR     (*(volatile uint32_t *) (myGPIOC_BASE + myGPIOx_OFFSET_IDR))
#define myGPIOC_ODR     (*(volatile uint32_t *) (myGPIOC_BASE + myGPIOx_OFFSET_ODR))
#define myGPIOC_BSRR    (*(volatile uint32_t *) (myGPIOC_BASE + myGPIOx_OFFSET_BSRR))
#define myGPIOC_BSRRL    (*(volatile uint32_t *) (myGPIOC_BASE + myGPIOx_OFFSET_BSRRL))
#define myGPIOC_BSRRH    (*(volatile uint32_t *) (myGPIOC_BASE + myGPIOx_OFFSET_BSRRH))

#define myGPIOD_MODER   (*(volatile uint32_t *) (myGPIOD_BASE + myGPIOx_OFFSET_MODER))
#define myGPIOD_OTYPER  (*(volatile uint32_t *) (myGPIOD_BASE + myGPIOx_OFFSET_OTYPER))
#define myGPIOD_IDR     (*(volatile uint32_t *) (myGPIOD_BASE + myGPIOx_OFFSET_IDR))
#define myGPIOD_ODR     (*(volatile uint32_t *) (myGPIOD_BASE + myGPIOx_OFFSET_ODR))
#define myGPIOD_BSRR    (*(volatile uint32_t *) (myGPIOD_BASE + myGPIOx_OFFSET_BSRR))
#define myGPIOD_BSRRL    (*(volatile uint32_t *) (myGPIOD_BASE + myGPIOx_OFFSET_BSRRL))
#define myGPIOD_BSRRH    (*(volatile uint32_t *) (myGPIOD_BASE + myGPIOx_OFFSET_BSRRH))

#define myGPIOE_MODER   (*(volatile uint32_t *) (myGPIOE_BASE + myGPIOx_OFFSET_MODER))
#define myGPIOE_OTYPER  (*(volatile uint32_t *) (myGPIOE_BASE + myGPIOx_OFFSET_OTYPER))
#define myGPIOE_IDR     (*(volatile uint32_t *) (myGPIOE_BASE + myGPIOx_OFFSET_IDR))
#define myGPIOE_ODR     (*(volatile uint32_t *) (myGPIOE_BASE + myGPIOx_OFFSET_ODR))
#define myGPIOE_BSRR    (*(volatile uint32_t *) (myGPIOE_BASE + myGPIOx_OFFSET_BSRR))
#define myGPIOE_BSRRL    (*(volatile uint32_t *) (myGPIOE_BASE + myGPIOx_OFFSET_BSRRL))
#define myGPIOE_BSRRH    (*(volatile uint32_t *) (myGPIOE_BASE + myGPIOx_OFFSET_BSRRH))

#define myGPIOF_MODER   (*(volatile uint32_t *) (myGPIOF_BASE + myGPIOx_OFFSET_MODER))
#define myGPIOF_OTYPER  (*(volatile uint32_t *) (myGPIOF_BASE + myGPIOx_OFFSET_OTYPER))
#define myGPIOF_IDR     (*(volatile uint32_t *) (myGPIOF_BASE + myGPIOx_OFFSET_IDR))
#define myGPIOF_ODR     (*(volatile uint32_t *) (myGPIOF_BASE + myGPIOx_OFFSET_ODR))
#define myGPIOF_BSRR    (*(volatile uint32_t *) (myGPIOF_BASE + myGPIOx_OFFSET_BSRR))
#define myGPIOF_BSRRL    (*(volatile uint32_t *) (myGPIOF_BASE + myGPIOx_OFFSET_BSRRL))
#define myGPIOF_BSRRH    (*(volatile uint32_t *) (myGPIOF_BASE + myGPIOx_OFFSET_BSRRH))

#define myGPIOG_MODER   (*(volatile uint32_t *) (myGPIOG_BASE + myGPIOx_OFFSET_MODER))
#define myGPIOG_OTYPER  (*(volatile uint32_t *) (myGPIOG_BASE + myGPIOx_OFFSET_OTYPER))
#define myGPIOG_IDR     (*(volatile uint32_t *) (myGPIOG_BASE + myGPIOx_OFFSET_IDR))
#define myGPIOG_ODR     (*(volatile uint32_t *) (myGPIOG_BASE + myGPIOx_OFFSET_ODR))
#define myGPIOG_BSRR    (*(volatile uint32_t *) (myGPIOG_BASE + myGPIOx_OFFSET_BSRR))
#define myGPIOG_BSRRL    (*(volatile uint32_t *) (myGPIOG_BASE + myGPIOx_OFFSET_BSRRL))
#define myGPIOG_BSRRH    (*(volatile uint32_t *) (myGPIOG_BASE + myGPIOx_OFFSET_BSRRH))

#define myGPIOH_MODER   (*(volatile uint32_t *) (myGPIOH_BASE + myGPIOx_OFFSET_MODER))
#define myGPIOH_OTYPER  (*(volatile uint32_t *) (myGPIOH_BASE + myGPIOx_OFFSET_OTYPER))
#define myGPIOH_IDR     (*(volatile uint32_t *) (myGPIOH_BASE + myGPIOx_OFFSET_IDR))
#define myGPIOH_ODR     (*(volatile uint32_t *) (myGPIOH_BASE + myGPIOx_OFFSET_ODR))
#define myGPIOH_BSRR    (*(volatile uint32_t *) (myGPIOH_BASE + myGPIOx_OFFSET_BSRR))
#define myGPIOH_BSRRL    (*(volatile uint32_t *) (myGPIOH_BASE + myGPIOx_OFFSET_BSRRL))
#define myGPIOH_BSRRH    (*(volatile uint32_t *) (myGPIOH_BASE + myGPIOx_OFFSET_BSRRH))

#define myGPIOI_MODER   (*(volatile uint32_t *) (myGPIOI_BASE + myGPIOx_OFFSET_MODER))
#define myGPIOI_OTYPER  (*(volatile uint32_t *) (myGPIOI_BASE + myGPIOx_OFFSET_OTYPER))
#define myGPIOI_IDR     (*(volatile uint32_t *) (myGPIOI_BASE + myGPIOx_OFFSET_IDR))
#define myGPIOI_ODR     (*(volatile uint32_t *) (myGPIOI_BASE + myGPIOx_OFFSET_ODR))
#define myGPIOI_BSRR    (*(volatile uint32_t *) (myGPIOI_BASE + myGPIOx_OFFSET_BSRR))
#define myGPIOI_BSRRL    (*(volatile uint32_t *) (myGPIOI_BASE + myGPIOx_OFFSET_BSRRL))
#define myGPIOI_BSRRH    (*(volatile uint32_t *) (myGPIOI_BASE + myGPIOx_OFFSET_BSRRH))

/* myRCC Registers with thier own offsets*/

#define myRCC_AHB1ENR    (*(volatile uint32_t *) (myRCC_BASE + myRCC_OFFSET_AHB1ENR))


/* pins masks */
#define _myGPIO_Pin_0                 ((uint16_t)0x0001)  /* Pin 0 selected */
#define _myGPIO_Pin_1                 ((uint16_t)0x0002)  /* Pin 1 selected */
#define _myGPIO_Pin_2                 ((uint16_t)0x0004)  /* Pin 2 selected */
#define _myGPIO_Pin_3                 ((uint16_t)0x0008)  /* Pin 3 selected */
#define _myGPIO_Pin_4                 ((uint16_t)0x0010)  /* Pin 4 selected */
#define _myGPIO_Pin_5                 ((uint16_t)0x0020)  /* Pin 5 selected */
#define _myGPIO_Pin_6                 ((uint16_t)0x0040)  /* Pin 6 selected */
#define _myGPIO_Pin_7                 ((uint16_t)0x0080)  /* Pin 7 selected */
#define _myGPIO_Pin_8                 ((uint16_t)0x0100)  /* Pin 8 selected */
#define _myGPIO_Pin_9                 ((uint16_t)0x0200)  /* Pin 9 selected */
#define _myGPIO_Pin_10                ((uint16_t)0x0400)  /* Pin 10 selected */
#define _myGPIO_Pin_11                ((uint16_t)0x0800)  /* Pin 11 selected */
#define _myGPIO_Pin_12                ((uint16_t)0x1000)  /* Pin 12 selected */
#define _myGPIO_Pin_13                ((uint16_t)0x2000)  /* Pin 13 selected */
#define _myGPIO_Pin_14                ((uint16_t)0x4000)  /* Pin 14 selected */
#define _myGPIO_Pin_15                ((uint16_t)0x8000)  /* Pin 15 selected */
#define _myGPIO_Pin_All               ((uint16_t)0xFFFF)  /* All pins selected */





/* functions prototypes */

void myGPIO_Digital_Output(unsigned long *port, unsigned long pin_mask);
void myGPIO_Digital_Input(unsigned long *port, unsigned long pin_mask);
