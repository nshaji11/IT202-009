<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Shop Project</td></tr>
<tr><td> <em>Student: </em> Nikita Shaji (nes22)</td></tr>
<tr><td> <em>Generated: </em> 12/21/2022 7:43:50 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-shop-project/grade/nes22" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Orders will be able to be recorded </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Orders table with valid data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208897228-e9b95327-3f41-428a-a531-fea6c888de34.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>orders table with data in it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of OrderItems table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208897374-029e018b-7a46-49da-a129-080788f517a8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>orderitems table, i still have to figure out how to correctly pull in<br>valid data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the purchase form UI from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208897720-b93472aa-d7a8-402a-ad3a-13e498d58dd3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>checkout form with total shown<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the items pending purchase from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208897879-f907d896-db60-413a-a0c6-3908819e11c2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>checkout page with items pending purchase<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the Order Process validations from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208901503-50740281-7bca-4011-905c-8fbe99db8276.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code for validations, its commented out bc it doesn&#39;t completely work yet im<br>still working on it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a screenshot showing the Order Process validations from the UI (Heroku)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208901885-0a5a7bd7-7703-499c-928c-a055343ad2db.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>working on validations, i included code because my UI validations are not working<br>yet due to unsuccessful code <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly describe the code flow/process of the purchase process</td></tr>
<tr><td> <em>Response:</em> <p>when the user proceeds to checkout, they get to the checkout page where<br>they can see their information (using the same information from cart code) and<br>then they can move to checkout form or return back to cart. for<br>purchase form page they fill out their information which is validated to make<br>sure the responses are legit and not empty using if(empty) to check and<br>(flash) to inform the user. when the user presses place order, the information<br>they filled out ideally would populate in the orders table. from there also<br>the orderitems table is filled using orders table to compare and get information<br>such as order_id.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/55, https://github.com/nshaji11/IT202-009/pull/54">https://github.com/nshaji11/IT202-009/pull/55, https://github.com/nshaji11/IT202-009/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/checkout_form.php">https://nes22-prod1.herokuapp.com/Project/checkout_form.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Order Confirmation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot showing the order details from the purchase form and the related items that were purchased with a thank you message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208902600-a3656301-60e7-449c-8592-6b5b06bec660.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>order confirmation page with details and thank you message, there isnt any shipping<br>info yet, i need to continue working on getting info from orders table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how this information is retrieved and displayed from a code logic perspective</td></tr>
<tr><td> <em>Response:</em> <p>order confirmation page takes the information that was populated in the orders and<br>orderitems table from when the user pressed place order on the checkout form.<br>the confirmation page takes the user_id to retrieve their info only and the<br>information they used such as payment type and address.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/57">https://github.com/nshaji11/IT202-009/pull/57</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/order_confirmation.php">https://nes22-prod1.herokuapp.com/Project/order_confirmation.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to see their Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history for a user</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208903024-c55ab798-0742-4338-a776-6f12859bcdeb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>order history page as of now (error), will be working on orders and<br>orderitems table to retrieve proper info<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208903024-c55ab798-0742-4338-a776-6f12859bcdeb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>i still need to work on this, i only have the order history<br>page and its an error for now<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details</td></tr>
<tr><td> <em>Response:</em> <p>purchase history is a page that the user can view to see their<br>recent orders. the page takes data from the orderitems table that lets it<br>retrieve data such as address and payment type based on the user_id so<br>only their information comes up. order details allows the user to see the<br>rest of the data including cost, items, quantity.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/58">https://github.com/nshaji11/IT202-009/pull/58</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/purchase_history.php">https://nes22-prod1.herokuapp.com/Project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history from multiple users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208903024-c55ab798-0742-4338-a776-6f12859bcdeb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>haven&#39;t properly been able to retrieve info from orders table so i wasn&#39;t<br>able to complete the store owner purchase history<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208903024-c55ab798-0742-4338-a776-6f12859bcdeb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>once i fix orders table info and store owner purchase i will add<br>details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details (mostly how it differs from the user's purchase history feature)</td></tr>
<tr><td> <em>Response:</em> <p>for a store owner the order history page would ideally show orders by<br>user id and there would be a button to click for order details<br>which would lead to a page to show order details in full specificity.<br>unlike a regular user, store owner would be able to see everyone&#39;s recent<br>orders and the details they used in the checkout form.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/58">https://github.com/nshaji11/IT202-009/pull/58</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/purchase_history.php">https://nes22-prod1.herokuapp.com/Project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart page showing the button to place an order</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208903892-3f4ce1d9-d470-4a41-a44b-e8f7840ca908.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>checkout button that was added to cart page to place an order<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208905449-e5353746-185d-46aa-ac67-131a787f7d25.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>i worked on fixing previous milestone2 issues such as pagination/filters and visibility for<br>products so those issues are closed, the rest are milestone3 issues that are<br>closed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208904902-9c8a86e5-f8a9-4662-ac7a-00dd32b2ed57.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>issues needed to be worked milestone3<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208905154-fd010329-38ec-48f6-9c56-d3ca3e3fcdd8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>issues that still need to be worked on milestone2<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-shop-project/grade/nes22" target="_blank">Grading</a></td></tr></table>