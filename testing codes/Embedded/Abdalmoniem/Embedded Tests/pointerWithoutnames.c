#include <stdio.h>
#include <avr/io.h>
#define ptr (*(unsigned char *)0x0060FF0F)
int main() {

  char x;
  ptr = 'a';
  printf("%p\n", &ptr);
  x = 7;
  getchar();
}
