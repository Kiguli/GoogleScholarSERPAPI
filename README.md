# GoogleScholarSERPAPI
This repository contains code snippets for wordpress which connect a users website with SERPAPI to get results from Google Scholar. These results include the total citations of an author, a table of the authors publications and the authors h-index.

# Running the Code

Got to https://serpapi.com/ and create an account to get your API Key. Free account gives 100 searches per month.

In your wordpress website download the plugin for Code Snippets (https://wordpress.org/plugins/code-snippets/). You only need the free version for this code.

In Snippets go to the 'Content [HTML]' Tab at the top and create a new code snippet.

Copy the code you wish to use from this Repo into the window. Make sure to change the XXXXXX to your API Key.

Check the box which says: 'Only display when inserted into a post or page.'

Scroll down to see the format for the Code Snippet relating to the code written. It will look something like: [code_snippet id=1 php=true]

Go to your website page or post and copy this code_snippet to where you want it to display. (Works with both Elementor and not).

Publish the page and check how it looks.

# Editting the Code

To edit the code you can easily change the parameters such as author_id by using the SERPAPI playground (https://serpapi.com/playground?engine=google_scholar_author&author_id=HhpTdG0AAAAJ&hl=en). The HTML URL you want to use can be acquired by clicking 'Export to Code' in the top right.

In the playground the format of the JSON file can be seen and if there is something specific that you wish to take then it is fairly simple to adjust h_index.php or total_citations.php to acquire that data. If it is a table you are looking for then adjusting All_Articles_Table.php should provide you with some success.

Happy Coding!
