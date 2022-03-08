#include <regx51.h>
// mảng theo chiều ngược
unsigned char port[8] = {0x80, 0x40, 0x20, 0x10, 0x08, 0x04, 0x02, 0x01};
// mảng theo chiều xuôi
unsigned char port2[8] = {0x01, 0x02, 0x04, 0x08, 0x10, 0x20, 0x40, 0x80};

void Delay_ms(unsigned int t)
{
    unsigned int x, y;
    for (x = 0; x < t; x++)
    {
        for (y = 0; y < 123; y++)
            ;
    }
}

void style_one_le()
{

    int i;
    int index = 1;
    for (i = 0; i <= 3; i++)
    {
        if (i == 0)
        {
            P1 = port[i + 1];
            index = 3;
        }
        else
        {
            P1 = port[index];
            index = index + 2;
        }

        Delay_ms(400);
    }
}
void style_one_chan()
{

    int i;
    for (i = 0; i <= 3; i++)
    {
        P1 = port[i * 2];
        Delay_ms(400);
    }
}

void style_for_first(int start, int end)
{

    int i;
    for (i = start; i <= end; i++)
    {
        P1 = port2[i];
        Delay_ms(400);
    }
}

void main()
{
    P1 = 0x00;
    Delay_ms(400);
    while (1)
    {
		// chạy ngược các đèn lẻ 7,5,3,1
        style_one_le();

        // chạy ngược các đèn chẵn 6,4,2,0
        style_one_chan();

        // chạy xuôi từ 0 đến 7
        style_for_first(0, 7);

        // chạy xuôi từ 3 đến 5
        style_for_first(3, 5);

        // chạy xuôi từ 2 đến 6
        style_for_first(2, 6);
    }
}
