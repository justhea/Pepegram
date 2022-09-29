                            <form  action="signup_save.php" method="post" autocomplete="on"> <!-- used autocomplete-->
                                <h4> Sign up </h4> 
								<hr>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username comrade</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Username" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password comrade</label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="example: mypassword123"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Your First Name comrade </label>
                                    <input id="passwordsignup" name="firstname" required="required" type="text" placeholder="First Name"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Your Last Name comrade </label>
                                    <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Last Name"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="">Your Gender comrade </label>
									<select id="passwordsignup"  name="gender">
										<option></option>
										<option>Male</option>
										<option>Female</option>
									</select>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a comrade ?
									<a href="#tologin" class="to_register"> Then why you are here? </a>
								</p>
                            </form>