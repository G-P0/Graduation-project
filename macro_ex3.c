#include <stdio.h>

/* The maximum number of bytes in the message */
#define MAX_SIZE 1024

/* Description:
 * 	A Macro used to calculate the check sum of the transmitted buffer of size MAX_SIZE.
 *  after the receiver receive the transmitted data it checks if the sum
 *  of the data at the receiver equals to the sum of the transmitted data
 *  at the transmitter. if they are equal then no errors happened during transmission
 *  and "Transmission Success" will be displayed else if there is any error
 *  "Transmission Fails" will be displayed
 */

#define RECEIVER(data_buffer,Size)\
{\
	unsigned short transmitted_sum=0;\
	unsigned short received_sum=0;\
	int loop_idx;\
	\
	/* calculate the check sum at the receiver */ \
	for(loop_idx = 0;loop_idx < Size-2;loop_idx++){\
		received_sum+=data_buffer[loop_idx];\
	}\
	printf("received_sum = %x\n",received_sum); \
	\
	/* get the transmitted sum from the buffer */ \
	transmitted_sum=(data_buffer[Size-1]<<(sizeof(data_buffer[Size-1])*8))+(data_buffer[Size-2]);\
	/* print it just for check */ \
	printf("transmitted_sum = %x\n",transmitted_sum); \
	\
	/* check if the received received_sum == transmitted_sum */ \
	if(received_sum==transmitted_sum){\
		printf("Transmission Success");\
	}\
	else{\
		printf("Transmission Fails");\
	}\
}

int main()
{
	int loop_idx;
	unsigned short check_sum=0;
	unsigned char data[MAX_SIZE];

    /* fill the buffer with ones except the last two bytes will include the sum of all data */
	for(loop_idx=0;loop_idx<MAX_SIZE-2;loop_idx++)
	{
		data[loop_idx]=1;
		check_sum=check_sum+data[loop_idx];
	}

	/* save the sum of all data in the last 2 bytes of the buffer */
	data[MAX_SIZE-2]=(unsigned char)check_sum; //save the least 8-bits in data[MAX_SIZE-2]
	data[MAX_SIZE-1]=(unsigned char)(check_sum>>(sizeof(data[MAX_SIZE-1])*8)); //save the most 8-bits in data[MAX_SIZE-1]
	printf("check_sum = %x \t data[MAX_SIZE-2] = %x \t data[MAX_SIZE-1] = %x\n",check_sum,data[MAX_SIZE-2],data[MAX_SIZE-1]);

	/* data will be transmitted and we will check sum at the receiver */
    RECEIVER(data,MAX_SIZE);

	return 0;
}
