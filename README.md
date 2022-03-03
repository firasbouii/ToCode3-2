# ToCode3-2
The objective of this `ToCode3_2` section is to create a Web services composition `(WSC)` composed of two(2) Web services : `WS1` and `WS2`. <br>

- `WS1`: is a Web service you have to implement yourself.
- `WS2`: is a Web service you have to choose from internet, then, write a client against `WS2`.
- `WS1` and `WS2` are to be invoked sequentially by a Web interface transparently.

Sample scenarios you can consider :

- `WS1` makes a fictive travel reservation for a customer. The total amount will be returned in TND. `WS2` will provide a reservation confirmation with the total amount in another currency, for instance USD.

- `WS1` lets a user choose a preferred vacation destination, and `WS2`, will provide the user with the weather forecast, for the designated destination and date.

> Step 1

Implement a SOAP web service (bottom-up approach)-- we will call it `WS1`.<br>
- Write a PHP web service using NUSOAP library. Your web service should have at least (2)two methods. one of them having a table as input/output. Your generated WSDL file should define at least one complex data type.
- Write a client in PHP to your Web service (one of the (2)two methods).

Implement a SOAP web service (Top-down approach) -- we will call it `WS-TD`.
- Write another PhP web services. Your web service should have one method.
- Write a client in PHP to your Web service.
- Generate your Web service contract using php2WSDL.
- Create another client for your web service in another programming language of your choice.

> Step 2

Search for your `WS2` : it should supports SOAP-based invocation. Test the web service and write a client.

> Step 3

Write a client for `WS1` and `WS2`.
Hint: The output of `WS1` must be an input to `WS2`.

> Step 4

Call `WS1` and `WS2` composition using a Web interface.


ws1:contains 2 web services
service 1 :calculate sum of amount 
service 2 :make the conversion of the amount from DNT to EURO
WS2 : It converts the sum in Euro float into a string written in letters


