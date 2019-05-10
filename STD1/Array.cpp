#include<iostream>
using namespace std;
char presiden [8][13] =
{"Soekarno","Soeharto","B.j. Habibie","Gusdur","Megawati","SBY","jokowidodo"};
int n;
int main()
{
	for(n=0;n<8;n++)
	{
	cout <<"Masukan urutan presiden dari yang pertama sampe terakhir : ";
	cin>> n;
	cout <<"Nama presdien tersebut adalah :";
	cout << " " <<presiden[n];
	cout << "\n";
	}
	return 0;
}

