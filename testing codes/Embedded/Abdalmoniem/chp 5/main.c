#include <stdio.h>

void subarray(int [],int );
#define soa(a) sizeof(a)/sizeof(a[0]) 
#define sub(x) &arr[(int)x],size-(int)x
int main(int argc, char const *argv[])
{
	int arr[100];
	int size=soa(arr);
	for (int i = 0; i<size; ++i)
	{
		arr[i]=i;
		
	}
	printf("%d\n", size );
	subarray(sub('A'));
	return 0;
}

void subarray (int a[], int size)
{
	
	for (int i = 0; i < size; ++i)
	{
		printf("%d ",*(a+i) );
	}
}