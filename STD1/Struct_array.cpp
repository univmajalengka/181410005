#include <iostream>
#include <string>
#include <sstream>
using namespace std;

struct dataanakkucing_t {
  string title;
  int year;
} dataanakkucing [3];

void printdataanakkucing (dataanakkucing_t dataanakkucing);

int main ()
{
  string mystr;
  int n;

  for (n=0; n<3; n++)
  {
    cout << "Enter title: ";
    getline (cin,dataanakkucing[n].title);
    cout << "Enter year: ";
    getline (cin,mystr);
    stringstream(mystr) >> dataanakkucing[n].year;
  }

  cout << "\nanda memasukan data anak kucing:\n";
  for (n=0; n<3; n++)
    printdataanakkucing (dataanakkucing[n]);
  return 0;
}

void printdataanakkucing (dataanakkucing_t dataanakkucing)
{
  cout << dataanakkucing.title;
  cout << " (" << dataanakkucing.year << ")\n";
}
