/**
 * define business struct
 */
struct UserProfile
{
	1:i32 userId;
	2:string useName;
}

/**
 * define service interface 
 */
service MtExampleService
{
	/**
	 * set use profile with ret int, default 0 means sucessed, other failed
	 */
	i32 SetUserProfile(1:UserProfile oProfile);

	/**
	 * get use profile by id
	 */
	UserProfile GetUserProfile(1:i32 userId);
}
