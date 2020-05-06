NTU CZ3006 NCC Assignment 2

1.	Write an HTML document to create a form that contains: <br>
  a.	A text box to collect the user’s name. <br>
  b.	Three text boxes for the user to key in the numbers of apples (69 cents each), oranges (59 cents each), and bananas (39 cents each) to purchase respectively. Whenever the user’s input in any of these text boxes changes, the validity of the input is checked at the client side using JavaScript. A valid input is defined as a sequence of one or more digits. If the input is not valid, an alert message is produced, and the user is asked to input again. <br>
  c.	A text box showing the total cost of the user’s order. The purpose of this text box is to show the total cost of order to the user during his selection. This text box is not for user’s input, so it should be blurred whenever it acquires focus. Whenever the user’s input in any of the above three text boxes changes, if the input is not valid, this text box should display “NaN”, and if the input is valid, the total cost of the user’s order is recalculated and displayed in this text box. This calculation is to be done completely at the client side using JavaScript. <br>
  d.	A collection of three radio buttons that are labelled as Visa, MasterCard and Discover. This is for the user to input his payment method. <br>
  e.	A Submit button. On completing the form, the user clicks this button to submit his order to the web server. <br>
  
2.	Write a server-side PHP program that receives the user’s order when the Submit button on the above HTML document is clicked. On receiving the order, the server-side PHP program computes the total cost of the user’s order and returns an HTML document to the user as a receipt. The receipt should specify the user’s name, what are ordered and the payment method in the form of a table. In addition, the server-side PHP program must also update a file named “order.txt” stored on the web server to reflect the new order. The file records the total numbers of apples, oranges and bananas ordered by all users so far in the following format: <br>
Total number of apples: 12 <br>
Total number of oranges: 23 <br>
Total number of bananas: 35 <br>
