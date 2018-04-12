

#include <avr/io.h>
#include <util/delay.h>

void Timer1_Fast_PWM_Init(unsigned short duty_cycle)
{
	TCNT1 = 0;		/* Set timer1 initial count to zero */
	ICR1 = 2499;	/* Set TOP count for timer1 in ICR1 register */

	OCR1A = duty_cycle; /* Set the compare value */


	TCCR1A = (1<<WGM11) | (1<<COM1A1);

	/* Configure timer control register TCCR1A
	 * 1. Fast Pwm Mode with the TOP in ICR1 WGM12=01 WGM13=1
	 * 2. Prescaler = F_CPU/64
     */
	TCCR1B = (1<<WGM12) | (1<<WGM13) | (1<<CS10) | (1<<CS11);
}

int main(void)
{
	DDRD |= (1<<PD5);

	while(1)
	{
		Timer1_Fast_PWM_Init(124);	/* Set Servo shaft at 0� position by 1 ms pulse */
		_delay_ms(1500);
		Timer1_Fast_PWM_Init(187);	/* Set Servo shaft at 90� position by 1.5 ms pulse */
		_delay_ms(1500);
		Timer1_Fast_PWM_Init(250);	/* Set Servo shaft at 180� position by 2 ms pulse */
		_delay_ms(1500);
	}
}
