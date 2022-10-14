<table><tr><td> <em>Assignment: </em> IT202 JavaScript and CSS Challenge</td></tr>
<tr><td> <em>Student: </em> Nikita Shaji (nes22)</td></tr>
<tr><td> <em>Generated: </em> 10/14/2022 12:56:31 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-javascript-and-css-challenge/grade/nes22" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ul><li>Reminder: Make sure you start in dev and it's up to date<ol><li><code>git checkout dev</code></li><li><code>git pull origin dev</code></li><li><code>git checkout -b M3-Challenge-HW</code></li></ol></li></ul><ol><li>Create a copy of the template given here:&nbsp;<a href="https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c">https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c</a></li><li>Implement the changes defined in the body of the code</li><li><strong>Do not</strong>&nbsp;edit anything where the comments tell you not to edit, you will lose points for not following directions</li><li>Make changes where the comments tell you (via TODO's or just above the lines that tell you not to edit below)<ol><li><strong>Hint</strong>: Just change things in the designated&nbsp;<code>&lt;style&gt;</code>&nbsp;and&nbsp;<code>&lt;script&gt;</code>&nbsp;tags</li><li><strong>Important</strong>: The function that drives one of the challenges is&nbsp;<code>updateCurrentPage(str)</code>&nbsp;which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.</li></ol></li><li>Create a branch called M3-Challenge-HW if you haven't yet</li><li>Add this template to that branch (git add/git commit)</li><li>Make a pull request for this branch once you push it</li><li>You may manually deploy the HW branch to dev to get the evidence for the below prompts</li><li>Create a new file&nbsp;<strong>m3_submission.md</strong>&nbsp;file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)</li><li>Add, commit, and push the submission file</li><li>Close the pull request by merging it to dev (double-check all looks good on dev)</li><li>Manually create a new pull request from dev to prod (i.e., base: prod &lt;- compare: dev)</li><li>Complete the merge to deploy to production</li><li>Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission</li></ol><style>` and `<script>` tags
    2. **Important**: The function that drives one of the challenges is `updateCurrentPage(str)` which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.  
5. Create a branch called M3-Challenge-HW if you haven't yet
6. Add this template to that branch (git add/git commit)
7. Make a pull request for this branch once you push it
8. You may manually deploy the HW branch to dev to get the evidence for the below prompts
9. Create a new file **m3_submission.md** file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)
10. Add, commit, and push the submission file
11. Close the pull request by merging it to dev (double-check all looks good on dev)
12. Manually create a new pull request from dev to prod (i.e., base: prod <- compare: dev)
13. Complete the merge to deploy to production
14. Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission
</style></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Completed Challenge Screenshots </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> 5 Screenshots based on the checklist items for this task</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/195725564-f4d86042-51b1-4ffa-9de5-5bb84e06b939.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>primary page with checklist items done<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/195725684-0766b411-b1d1-4ecc-91eb-c52287e09545.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>login link clicked page screenshot<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/195725712-3c92ccdb-80fb-4e1a-9456-b1b43aeff1d4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>register link clicked page screenshot<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/195725763-a01625d8-0d57-48e2-baaa-0149f4a45d05.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile link clicked screenshot<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98337957/195725806-fa7d2a87-9ee2-46a1-b5eb-2186f07ecc9e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>logout link clicked screenshot<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Explain Solutions (Grader use this section to determine completion of each challenge) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Briefly explain how you made the navigation horizontal</td></tr>
<tr><td> <em>Response:</em> <p>to make the navigation horizontal i used (float: left;) which aligned the headers<br>from left to right (login to logout) whereas float:right; would have made it<br>horizontal also but backwards (logout to login)<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how you remove the navigation list item markers</td></tr>
<tr><td> <em>Response:</em> <p>to remove the bullet points from the navigation I specified that there shouldn&#39;t<br>be any list style or decoration for the words by setting text-decoration and<br>list-style-type to none. this made sure any preset formats were taken off and<br>removed the navigation markers.&nbsp;&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you gave the navigation a background</td></tr>
<tr><td> <em>Response:</em> <p>to give the navigation a background i used the overflow function and set<br>it to hidden. this creates a box that surrounds the navigation and then<br>i can set the background-color of it as well.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how you made the links (or their surrounding area) change color on mouseover/hover</td></tr>
<tr><td> <em>Response:</em> <p>to make the links change color over mouseover, i used the :hover selector<br>to highlight the elements. i set the background color, the color of the<br>text, and the text underline that would appear when the element is hovered<br>over. i also used transition: to specify how fast the background color would<br>change.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you changed the challenge list bullet points to checkmarks (✓)</td></tr>
<tr><td> <em>Response:</em> <p>i changed the bullet points by using the :before selector on the bullet<br>point elements to specify that i wanted the checkmark to come before the<br>elements listed.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain how you made the first character of the h1 tags and anchor tags uppercased</td></tr>
<tr><td> <em>Response:</em> <p>i used text-transform for both &quot;h1&quot; and &quot;a&quot; tags and specified to capitalize<br>because it makes the first character&#39;s of the word&#39;s capital.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain/describe your custom styling of your choice</td></tr>
<tr><td> <em>Response:</em> <p>I chose to change the font of the navigation bar and set it<br>to Times New Roman, using the selector font-family which allowed me to change<br>the font. I also added a generic name font, monospace just in case<br>Times New Roman isn&#39;t available.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain how the styling for the challenge list doesn't impact the navigation list</td></tr>
<tr><td> <em>Response:</em> <p>the navigation list is styled through nav{} which is the navigation background styling<br>code and nav a{} which is the hyperlink styling code. The challenge list<br>styling is done through list item elements (li {} and li ul{}). so<br>by styling in each specific bracket, the code for one doesn&#39;t impact the<br>other.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Briefly explain how you updated the content of the h1 tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>using the navigation bar links, i set it so that when the user<br>clicks (onclick), the updateCurrentPage function will change the h1 tag to the name<br>of the link that the user clicked.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain how you updated the content of the title tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>using the navigation bar links, i set it so that when the user<br>clicks (onclick), the updateCurrentPage function will change the title tag of the site<br>to the name of the link that the user clicked.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Comment briefly talking about what you learned and/or any difficulties you encountered and how you resolved them (or attempted to)</td></tr>
<tr><td> <em>Response:</em> <p>I struggled with how to change the bullets for the challenge list to<br>checkmarks. First i did list-style-type checkmarks but it didn&#39;t change anything. And then<br>after some research i realized i needed to use li ul :before and<br>then insert the checkmark character to have the bullets change. Also figuring out<br>how to put a background for the navigation made me confused for a<br>bit until I added the background color and the background became visible. I<br>also had to work a lot to try to figure out the title<br>and header changes when the link is clicked. And i think it&#39;s still<br>wrong because i didn&#39;t modify the code in the right area.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your pull request (hw branch to dev only)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/nshaji11/IT202-009/pull/4">https://github.com/nshaji11/IT202-009/pull/4</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to your solution html file from prod (again you can assume the url at this point)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://nes22-prod1.herokuapp.com/M3/challenge.html">https://nes22-prod1.herokuapp.com/M3/challenge.html</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-javascript-and-css-challenge/grade/nes22" target="_blank">Grading</a></td></tr></table>