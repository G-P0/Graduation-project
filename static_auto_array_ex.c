

#include <stdio.h>

void staticArrayInit( void ); /* function prototype */
void automaticArrayInit( void ); /* function prototype */

/* function main begins program execution */
int main( void )
{
    printf( "First call to each function:\n" );
    staticArrayInit();
    automaticArrayInit();
    printf( "\n\nSecond call to each function:\n" );
    staticArrayInit();
    automaticArrayInit();
    return 0; /* indicates successful termination */
} /* end main */

/* function to demonstrate a static local array */
void staticArrayInit( void )
{
    /* initializes elements to 0 first time function is called */
    static int array1[ 3 ];
    int i; /* counter */
    printf( "\nValues on entering staticArrayInit:\n" );
    /* output contents of array1 */
    for ( i = 0; i <= 2; i++ ) {
        printf( "array1[ %d ] = %d ", i, array1[ i ] );
    } /* end for */
    printf( "\nValues on exiting staticArrayInit:\n" );
    /* modify and output contents of array1 */
    for ( i = 0; i <= 2; i++ ) {
        printf( "array1[ %d ] = %d ", i, array1[ i ] += 5 );
    } /* end for */
} /* end function staticArrayInit */

/* function to demonstrate an automatic local array */
void automaticArrayInit( void )
{
    /* initializes elements each time function is called */
    int array2[ 3 ] = { 1, 2, 3 };
    int i; /* counter */

    printf( "\n\nValues on entering automaticArrayInit:\n" );
    /* output contents of array2 */
    for ( i = 0; i <= 2; i++ ) {
        printf("array2[ %d ] = %d ", i, array2[ i ] );
    } /* end for */
    printf( "\nValues on exiting automaticArrayInit:\n" );
    /* modify and output contents of array2 */
    for ( i = 0; i <= 2; i++ ) {
        printf( "array2[ %d ] = %d ", i, array2[ i ] += 5 );
    } /* end for */
} /* end function automaticArrayInit */

