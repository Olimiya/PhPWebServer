import React from 'react'
import './Teacher.css'
import { Layout, Menu, Icon } from 'antd';
import Info from '../Info/Info'
import RecordScore from '../RecordScore/RecordScore'
import NameForm from '../Info/NameForm';
import AddressList from '../Info/AddressList';
import Seat from '../Info/Seat';

const { Header, Content, Footer, Sider } = Layout;
const { SubMenu } = Menu;

// 从后端获取的课程放这里
const numbers = [1, 2, 3, 4, 5];
const courses = numbers.map((number, index) =>
  (
    <Menu.Item key={index}>
      <Icon type="user" />
      <span className="nav-text">Course {number}</span>
    </Menu.Item>
  )
);

class Teacher extends React.Component {
  constructor(props) {
    super(props)
    this.state = {
      current: 'info',
      course: '1',
    }
  }

  componentDidMount() {
    //console.log(window.innerHeight)
  }

  handleClick = e => {
    console.log('click ', e);
    this.setState({
      current: e.key,
    });
  };

  handleCourseClick = e => {
    console.log('click course ', e);
    this.setState({
      course: e.key,
    });
  };

  renderCourses() {
    return (
      <Menu theme="dark" onClick={this.handleCourseClick} mode="inline" selectedKeys={[this.state.course]}>
        {courses}      
      </Menu>
    )
  }

  // 这里肯定也要改啦
  renderContent() {
    switch(this.state.current) {
      case 'record':
        return(
          <RecordScore course={numbers[this.state.course]} />
        )
      case 'edit':
        return(
          <div>编辑个人信息</div>
        )
      case 'form:1':
        return(
          <NameForm />
        )
      case 'form:2':
        return(
          <Seat />
        )
      case 'form:3':
        return(
          <div>座位表-背视</div>
        )
      case 'form:4':
        return(
          <div>座位表-默认</div>
        )
      case 'form:5':
        return(
          <AddressList />
        )
      case 'album:1':
        return(
          <div>座位图-正视</div>
        )
      case 'album:2':
        return(
          <div>座位图-背视</div>
        )
      case 'album:3':
        return(
          <div>座位图-默认</div>
        )
      case 'info':
      default:
        return(
          <Info />
        )
    } 
  }

  render() {
    return (
      <div className="container" >
      <Layout >
        <Sider
          breakpoint="lg"
          collapsedWidth="0"
          onBreakpoint={broken => {
            //console.log(broken);
          }}
          onCollapse={(collapsed, type) => {
            //console.log(collapsed, type);
          }}
        >
          <div className="logo" />
          {this.renderCourses()}
        </Sider>
        <Layout>
          <Header style={{ background: '#fff', paddingTop: 8, paddingLeft: 0, paddingRight: 0, margin: 0, position: 'fixed', zIndex: 1, width: '100%' }}>
            <Menu onClick={this.handleClick} selectedKeys={[this.state.current]} mode="horizontal">
              <Menu.Item key="info">
                <Icon type="mail" />
                查询基本信息
              </Menu.Item>
              <SubMenu
                title={
                  <span className="submenu-title-wrapper">
                    <Icon type="mail" />
                    查询表格
                  </span>
                }
               >
                <Menu.Item key="form:1">名单表</Menu.Item>
                <Menu.Item key="form:2">座位表-正视</Menu.Item>
                <Menu.Item key="form:3">座位表-背视</Menu.Item>
                <Menu.Item key="form:4">座位表-默认</Menu.Item>
                <Menu.Item key="form:5">通讯录</Menu.Item>
              </SubMenu>
              <SubMenu
                title={
                  <span className="submenu-title-wrapper">
                    <Icon type="mail" />
                    查询相册
                  </span>
                }
               >
                <Menu.Item key="album:1">座位图-正视</Menu.Item>
                <Menu.Item key="album:2">座位图-背视</Menu.Item>
                <Menu.Item key="album:3">座位图-默认</Menu.Item>
              </SubMenu>
              <Menu.Item key="record">
                <Icon type="mail" />
                录入成绩
              </Menu.Item>
              <Menu.Item key="edit">
                <span className="submenu-title-wrapper">
                  <Icon type="setting" />
                  编辑个人信息
                </span>
              </Menu.Item>
            </Menu>
          </Header>
          <div className="content" >
          <Content style={{ margin: '88px 16px 0', background: '#fff' }} >
              {this.renderContent()}
          </Content>
          <Footer style={{ textAlign: 'center' }}>学 生 信 息 管 理 系 统</Footer>
          </div>
        </Layout>
      </Layout>
      </div>
    )
  }
}
  
export default Teacher