# Front End

- Login.html – Responsible for logging in with valid credentials
	login.php (gets the username/password entered by user, and sends it to backend, if it’s validated then it authenticates the user login. Also creates log of successful and failed logins)

- Signup.html – Responsible for registering a new username
	register.php ( sends the information entered by user to backend, and if username doesn’t exist, creates an account and brings user to searchx.php)

- Searchx.php ( mixture of php / html code) – Main homepage after logging in, gives user options of what they want to do
	search.php ( Search for a food item , return results from API )
	attributesearch.php ( Search a food item by specific nutrition by selecting from a menu )
	fav.php ( Add a food item to user’s favorite list )
	deletefav.php ( Remove a food item from a user’s favorite list)
	showfav.php (Show the user’s favorite list )
	recent.php ( Show recent searches of user )
	trackresults.php ( Add food items to a tracker which tracks nutritional attributes)
	deletetracker.php (Removes all items from the tracker)
	logout.php (Logs a user out and kills the session)

- Client.php – Has all the functions below required for the features which send requests to rabbitMQ to communicate with Backend / API
	login ( sends username & password through rabbitMQ to backend & returns response)
	register ( sends user info at signup through rabbitMQ to backend & returns response)
	search (sends item & username through rabbitMQ to backend & API & returns response)
	favFood (sends item & username through rabbitMQ to backend & returns response)
	showfav (sends username through rabbitMQ to backend & returns response of fav food)
	deletefav (sends username & item through rabbitMQ to backend & returns response)
	recent (sends username through rabbitMQ to backend & returns recent searches  )
	track (sends username & item through rabbitMQ to backend & adds item to tracker)
	deletetracker (sends username through rabbitMQ to backend & deletes whole tracker)
	trackresults (sends username through rabbitMQ to backend & shows tracker response)
	attributesearch (sends username through rabbitMQ to backend & API & returns response)
	redirect (shows a message and refreshes user to specific page)


