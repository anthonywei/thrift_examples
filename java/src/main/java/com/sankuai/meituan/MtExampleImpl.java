package com.sankuai.meituan;

/**
 * Created by weishouyang on 14-6-24.
 */
public class MtExampleImpl implements MtExampleService.Iface{

    public MtExampleImpl() {

    }

    /**
     * set use profile with ret int, default 0 means sucessed, other failed
     *
     * @param oProfile
     */
    public int SetUserProfile(UserProfile oProfile) throws org.apache.thrift.TException {
        /**
         * TODO your code here
         */
        return 0;
    }

    /**
     * get use profile by id
     *
     * @param userId
     */
    public UserProfile GetUserProfile(int userId) throws org.apache.thrift.TException {
        /**
         * TODO your code here
         */
        return new UserProfile();
    }
}
