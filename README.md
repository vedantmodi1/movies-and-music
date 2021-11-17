# movies-and-music

The project is an OTT platform which consists of both Movies and TV Shows, the values of which have been imported from a dataset downloaded from Kaggle. 
The website requires the user to first sign-in and then login to avail the services. 

While signing-in, there is an option of 2 types of users- Regular and Student. For the latter, the user will be required to provide their university name and email address and subscription fee will also be subsidized.  While logging in, an option is provided to the user- whether he wants to log in to watch movies(Netflix) or he wants to listen to songs(Spotify). 

Another functionality that we have provided is- we’ve given the user the ability to freeze his/her account and unfreeze it whenever they wants. The period for which the account would be frozen will not be counted in the  subscription duration and he/she will not be able to access any services till the account is un-freezed. 

### PHP Session Handling
Our project uses session variables for accessing the user email id and user id once the user is logged in. The 
session is started once the user logs in successfully to the website. We then pass these variables back to the 
database when: 
 
- The user watches content on the netflix service 
- Listens to music music on spotify service 
- Freezes their account 

### Tools Used        
- MySQL  
- MySQL Workbench 8  
- MySQL Command Client   
- PHP   
- CSS  
- BootStrap 
- JSON
