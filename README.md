## Github User Search With Laravel 9
To implement an api that will search through GitHub users and their repositories list (https://developer.github.com/v3/).

All data from GitHub API should be stored in the DataBase.
The relevant data could be seen from the example design below.

### Additional requirements:
- User list endpoint should be paginated (3 per page)
- User list endpoint should be sorted based on 
  - number of repositories
  - number of followers
  - popularity (how many times user details are
requested)
- Please add search logging (search requests with request results)
- Add an endpoint for showing 3 most popular users by date 
- Add api documentation

![Mockup](https://github.com/dennisxh/github-search/blob/master/public/ui.png?raw=true)
