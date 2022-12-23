<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Shop Project</td></tr>
<tr><td> <em>Student: </em> Nikita Shaji (nes22)</td></tr>
<tr><td> <em>Generated: </em> 12/22/2022 11:46:02 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-4-shop-project/grade/nes22" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone4 branch</li><li>Create a new markdown file called milestone4.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone4.md</li><li>Add/commit/push the changes to Milestone4</li><li>PR Milestone4 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes</li><li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209269156-b8d11e2a-56d0-49c6-9d9e-8cd29acddb26.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>visibility column on Users table in sql<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209269329-f2398f9a-f319-4df7-8a5a-73642bc41046.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile edit view page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209269419-e6a629f8-0f95-4a3b-952e-fe888118af36.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile view, don&#39;t have ratings for user because i had trouble with ratings<br>table and data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/64">https://github.com/nshaji11/IT202-009/pull/64</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/profile.php">https://nes22-prod1.herokuapp.com/Project/profile.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>public/private profile relies on the tinyint boolean of 1 or 0. 1 would<br>make the profile visible or public and 0 would keep it private. public<br>profile would have user information displayed for everyone to see such as user<br>ratings and reviews and private would not.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to rate a product they purchased </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Ratings table with some data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209269600-46ca4bfa-5f50-4919-b404-03e25a5759c4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>ratings table has no data because I couldn&#39;t get it to populate info<br>from the form<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Product Details page with comments/ratings and the form to add another and the average rating</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209269685-266a017a-5658-4116-bd15-3287eeccf276.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>product details page with rating form, but no other rating data because i<br>couldn&#39;t get it to work<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the error message for a user trying to rate/comment that hasn't purchased the product</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209269685-266a017a-5658-4116-bd15-3287eeccf276.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>no user error message because form doesn&#39;t function correctly<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/65">https://github.com/nshaji11/IT202-009/pull/65</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to a product details page with ratings/comments</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/product_detail.php?item_id=11">https://nes22-prod1.herokuapp.com/Project/product_detail.php?item_id=11</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic being adding comment/rating and validations</td></tr>
<tr><td> <em>Response:</em> <p>the comment/rating form allows users to input their rating and comment. this information<br>would be populated into the Ratings table where it stores the users reviews<br>and also takes the int review and uses it to calculate the average<br>rating against the other reviews. then the Ratings table info can be retrieved<br>when showing the history of a public users reviews or displaying all the<br>reviews that users wrote about a product on the product detail page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209269864-78a22192-45d7-46ab-b558-d37b02cd0ffa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>pagination and filters of user&#39;s purchase history, only one screenshot because i dont<br>have data for a second page <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/66">https://github.com/nshaji11/IT202-009/pull/66</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/purchase_history.php">https://nes22-prod1.herokuapp.com/Project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied (ensure the calculated total price is clearly visible)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209269980-9067c9f9-a28b-4846-8511-cd844331de1e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>store owner purchase history pagination and filters, even when applied, i don&#39;t have<br>data to show the results<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209272335-1d1c2561-29c7-4fb7-927e-d66500164761.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the code of how total is calculated<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/66">https://github.com/nshaji11/IT202-009/pull/66</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the store owner's purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/admin/order_history.php">https://nes22-prod1.herokuapp.com/Project/admin/order_history.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the total price is calculated based on the filtered/paginated results</td></tr>
<tr><td> <em>Response:</em> <p>the filters results show the prices of each users order history and the<br>values of those prices can be added to find to the sum of<br>the total revenue<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to Shop </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot(s) of the newly paginated pages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209270155-2b86b86d-8e56-4242-b761-4c7f2a4b12f2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>pagination for store owner shop page 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209270306-74ef5778-e032-41b1-b1c8-3c3c89cbcafe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after cost is sorted by down, and on page 2 of the sort<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/66">https://github.com/nshaji11/IT202-009/pull/66</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related pages</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/admin/shop_page.php?name=&col=cost&order=desc&page=2">https://nes22-prod1.herokuapp.com/Project/admin/shop_page.php?name=&col=cost&order=desc&page=2</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Store Owner will be able to see all products out of stock </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the out of stock results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209270451-9081191c-e74d-4403-b5e9-32dea059f4e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>i don&#39;t have out of stock filters<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/66">https://github.com/nshaji11/IT202-009/pull/66</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/admin/shop_page.php?name=&col=stock&order=asc">https://nes22-prod1.herokuapp.com/Project/admin/shop_page.php?name=&col=stock&order=asc</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain your approach to this view</td></tr>
<tr><td> <em>Response:</em> <p>for out of stock items i would have and if function for if<br>stock set to 0, then display the items. this would filter out which<br>items are out of stock.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User can sort products by average rating on the shop page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing the sort in effect</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209270744-d00a4bee-904f-4d4d-b294-9ebe24ab3cef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>i was not able to accomplish this requirement<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Products table (or your implementation/approach to average rating)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209270830-e4234ba3-40bf-4232-be10-dab9992f8c4e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>rating field in products, ideally the ratings that were inputted through the form<br>would have populated in the empty rating fields.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/65">https://github.com/nshaji11/IT202-009/pull/65</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/Project/shop.php">https://nes22-prod1.herokuapp.com/Project/shop.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you implemented the average rating recording logic and how it applies to this sort on shop</td></tr>
<tr><td> <em>Response:</em> <p>average rating would have been calculated based on the int rating values that<br>were inputted into the review form. the rating int would have been divided<br>by the number of reviews there were to find the average rating and<br>then that would have been posted to the rating column in Products table<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209271763-a11c825d-545d-40b8-ad7a-caaf059ec4d8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>incomplete issues for milestone4<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/209271810-6b4507cf-c352-425d-94e9-825cba30f404.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>complete issues for milestone4<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-4-shop-project/grade/nes22" target="_blank">Grading</a></td></tr></table>