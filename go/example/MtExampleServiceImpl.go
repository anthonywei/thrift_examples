package example

import "fmt"

type MtExampleServiceImpl struct { 
}

func NewMtExampleServiceImpl() *MtExampleServiceImpl{
    return &MtExampleServiceImpl{}
}

func (p *MtExampleServiceImpl) SetUserProfile(oProfile *UserProfile) (r int32, err error){
    //TODO 
    fmt.Println("SetUserProfile called")
    return
}

func (p *MtExampleServiceImpl) GetUserProfile(userId int32) (r *UserProfile, err error) {
    //TODO
    fmt.Println("GetUserProfile called")
    return
}
