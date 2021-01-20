#include<iostream>
using namespace std;
class A{
	public:
	int a;
	A(int a){
		
	cout<<"\n in A"<<a;	
	
};

class B:public A{
	
	public:
		int b;
	B(int b){
			cout<<"\n in B"<<b;
		}
};
main(){
	B b1;
	
	
}
