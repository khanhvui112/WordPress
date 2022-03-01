#include <regx52.h>
#define LED_PORT P1
#define LED_PORT2 P0
void Delay_ms(unsigned int t)
{
    unsigned int x, y;
    for (x = 0; x < t; x++)
    {
        for (y = 0; y < 123; y++)
            ;
    }
}

void main()
{
    unsigned char i;
    LED_PORT = 0x00;
    LED_PORT2 = 0x00;
    while (1)
    {
        for (i = 0; i < 8; i++)

        {
            if (i % 2 == 0)
            {
                LED_PORT = LED_PORT >> 3;
            }
            if (i % 2 != 0)
            {
                LED_PORT = LED_PORT >> 2;
            }

            LED_PORT2 = LED_PORT2 >> 1;
            Delay_ms(50);
        }
        for (i = 0; i < 8; i++)
        {
            if (i % 2 == 0)
            {
                LED_PORT = LED_PORT >> 3;
            }
            if (i % 2 != 0)
            {
                LED_PORT = LED_PORT >> 2;
            }
            LED_PORT2 = LED_PORT2 << 1 | 0x01;
            Delay_ms(200);
        }
    }
}
