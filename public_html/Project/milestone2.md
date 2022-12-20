<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Nikita Shaji (nes22)</td></tr>
<tr><td> <em>Generated: </em> 12/19/2022 8:40:48 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-2-shop-project/grade/nes22" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208537911-e42e7fb8-8b28-43be-be3d-e3ce72d23d17.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>add item page with filled in data<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208538037-cd1c3ebb-f088-4f48-9811-62fe1f027d3c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message after item created<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208539024-5340ddfb-2d8a-47d7-9649-9c8228487641.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>products table with columns<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>to create a product, first it&#39;s only set for admins to be able<br>to do so. in the code, there&#39;s the get columns function that takes<br>the table provided in add_item.php (<span style="color: rgb(156, 220, 254); font-family: Consolas, &quot;Courier<br>New&quot;, monospace; white-space: pre;">$TABLE_NAME = &quot;Products&quot;;</span>) and then uses that in the function<br>to get the columns in the Products table and lists it in a<br>form that the admin can then submit. and when it is submitted the<br>item is added to the products table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/28">https://github.com/nshaji11/IT202-009/pull/28</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/admin/add_item.php">https://nes22-prod1.herokuapp.com/Project/admin/add_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208538810-dc778541-2ea1-4282-9071-03213ae3dcb7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page logged out to show anyone can see<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208539907-e328857c-a476-4dfc-bfa5-20e46503a136.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>filters applied and result that doesnt work<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208540259-1d81b968-cfa4-4607-b107-959ad6112c76.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>filter and sort logic code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>the filters for cost, stock, name, created, ascending and descending order and name<br>search were added using se. it uses !in_array and compares the products against<br>the defined filter and shows them as requested. it was supposed to check<br>against the table and order the products as they were filtered but my<br>code didnt work and the filters don&#39;t work at all.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/28 and https://github.com/nshaji11/IT202-009/pull/31">https://github.com/nshaji11/IT202-009/pull/28 and https://github.com/nshaji11/IT202-009/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/shop.php?name=nerds&col=cost&order=desc">https://nes22-prod1.herokuapp.com/Project/shop.php?name=nerds&col=cost&order=desc</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208540529-8f4538e9-5576-4c72-82c1-b4f27ccf77c4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin product list<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>there is no column for visibility because i wasn&#39;t able to completely figure<br>it out yet. i will be working on it for the next milestone.<br>but i would make a visible/non-visible toggle that when it is visible, products<br>would be shown in shop and when not visible it would not be<br>shown in shop except to admins.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/28">https://github.com/nshaji11/IT202-009/pull/28</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/admin/list_items.php">https://nes22-prod1.herokuapp.com/Project/admin/list_items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208540987-1bcce70d-b22b-4cc1-a3d8-357feac616c4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>edit button for admin on shop page <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208541090-7d7d1601-1617-4f34-a513-dcd1797e138f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>product details page but no edit button yet<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208541202-7025481e-170c-4d0c-aa69-12c49959cc78.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>edit button under actions on admin product list page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208542109-1f3be54d-6a23-4bd4-b4a6-53553f8c7e4c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before editing product heath bar<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208542314-68f27e90-7b65-42ea-9945-cbc5de9642f4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>stock and cost changed to 5 for heath bar in list item u<br>can see the change<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208542505-f6ea6216-4c0d-46c6-af28-6360de5519a7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>stock and cost changed to 5 on edit page and confirmation message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>edit item is made visible only to admins through (if(!has_role(&quot;Admin&quot;))). the get_columns function<br>is used to get the columns for the form from the Products table<br>just like in add_item.php. But for edit_item.php once the item is edited and<br>update button is pressed, the values of the changed columns are modifiedin the<br>table. the function map_column is also added to use the fetched columns to<br>map through input_map().<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/30">https://github.com/nshaji11/IT202-009/pull/30</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/admin/edit_item.php?id=1">https://nes22-prod1.herokuapp.com/Project/admin/edit_item.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208542934-204d8f8d-694a-4d29-815b-7dffb1cf48b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>product details button on shop<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208542740-e96ed81c-4a8b-476d-9d70-6aa917183592.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>incomplete project details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>the product details page is unfinished but for now it has the headers<br>titles for item, price, stock, description. I still need to pull the information<br>about the product to display onto the product details page and this i<br>would do by getting information from the Products table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/30">https://github.com/nshaji11/IT202-009/pull/30</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-dev1.herokuapp.com/Project/product_detail.php?item_id=2">https://nes22-dev1.herokuapp.com/Project/product_detail.php?item_id=2</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208544996-4a5f6cd2-801a-4e3a-8529-83074f078199.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>success message of adding to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208545259-412a793e-8901-46c4-9cb9-43b468f374f7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows nonlogged in user in shop page <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208545334-0ac43a94-1d3c-4833-b789-247ae8ef87bc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error message when non-logged in user tries to add to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208545534-fb00fb0e-b54c-4be1-b1f7-f40a7d146ba1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>cart table with two products in it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>the cart is only 1 per user so there is only one cart<br>product_id and the user_id is the composite unique key. and the cart is<br>created through table with information of id, desired_quantity, unit_price, created, modified.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>for add to cart we create a query of (INSERT INTO CART (item_id,<br>desired_quantity, unit_price, user_id). item_id is specific to that one item and desired_quantity is<br>the amount the user chooses. then then stmt is executed and the item<br>is added to the cart as well as the Cart table with the<br>proper information of quantity and item id.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/28">https://github.com/nshaji11/IT202-009/pull/28</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208545822-c4d80d08-054a-4165-aec5-29b78a914eb6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>cart setup for user adding to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>the cart page is added in the nav bar so the user can<br>go to the cart from there. also in cart.php, it is required that<br>the user is logged in to view the cart through (is_logged_in(true)). the cart<br>is linked to the user_id, as the user adds products, the cart and<br>the cart table is updated. the cart shown is cart table that is<br>fetched with the information from the products table ( items stock, name,&nbsp; price,<br>quantity details). there is not product details page added yet.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/28">https://github.com/nshaji11/IT202-009/pull/28</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/cart.php">https://nes22-prod1.herokuapp.com/Project/cart.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208546263-ba4b0ee5-b61f-486f-84f7-228bb43ca532.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>cart before quantity of starburst is modified <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208546307-669717cc-bc40-450d-8959-d93e6ff05c7b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>cart after quantity of starburst is increased to 10, total and subtotal also<br>changed to reflect update<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208546805-e403cc3a-2be2-4786-a6b7-52b1c992f254.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before starburst item quantity is set to 0<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208546919-3a0ee73d-8e0d-45f4-a8f2-9c32f6c03c8f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>zero typed into starburst quantity before pressing update <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208546955-88ea737c-b7d4-4555-8590-a1116188270b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after pressing update, starburst is removed, total is updated <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208547169-1f6f9bb7-2acc-45c1-8311-8dcaf3b3a4bd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>when a negative value is typed in, a popup appears informing user to<br>use number greater than zero<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>for the value of 0 the case &quot;update&quot; catch part was edited to<br>include what would happen if desired_quantity was set to less than or equal<br>to 0. for when this happened i added the stmt =$db-&gt;prepare(&quot;DELETE FROM Cart<br>WHERE id = :item_id&quot;). This would delete the item in the cart that<br>the desired quantity was set to 0, through the Cart table. Also for<br>negative values, for the form method I set the desired quantity form to<br>accept a minimum value of 0, so if a negative value was entered<br>the user would get an alert.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/29, ">https://github.com/nshaji11/IT202-009/pull/29, </a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208547430-03b8e6b9-9183-4bff-859a-b4c2758be994.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before deleting sour patch kids from cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208547571-dbb44ecf-8ba8-42b7-9db4-3d3a74d2bdb9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after deleting sour patch kids, item is removed, total is updated<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208547864-f278e640-554d-4cfa-bd10-636774220c2e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before clearing cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208547920-db0a7715-7de1-441c-8d13-26c8d8536b7a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after clear cart, message shows cart has cleared and total is 0<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>for the delete individual product the case &quot;delete&quot; had ( $stmt =$db-&gt;prepare(&quot;DELETE FROM<br>Cart WHERE id =:item_id&quot;);) which when executed would remove the individual item from<br>the Cart table and the UI cart and respond with the item deleted<br>message.<div>for the clear cart, the case &quot;clear&quot; used (&nbsp;$stmt=$db-&gt;prepare(&quot;DELETE FROM Cart WHERE user_id<br>= :uid&quot;);) where instead of the item_id, the user_id is used to retrieve<br>the user&#39;s Cart info from the table and delete the user&#39;s entire products<br>in their cart.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/29, ">https://github.com/nshaji11/IT202-009/pull/29, </a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208551022-5e88a3fb-df9c-4a39-a317-fba3c8bd2abb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>incomplete issues for product details page, visibility(non visible and visible products) and filters<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208551107-cdb8f540-c3c3-4220-a5c0-c2f24c76ef4b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>1/3 of closed issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208551176-fcf0991d-7644-434d-ae7b-3f8f26547a1f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>2/3 of closed issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/208551226-0cc6f475-140e-4bb3-a051-ea48aba69e8c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>3/3 closed issues<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/login.php">https://nes22-prod1.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-2-shop-project/grade/nes22" target="_blank">Grading</a></td></tr></table>