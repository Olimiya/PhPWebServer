import React from 'react';
import './App.css';

import Login from './Login/Login';
import history from './Router/history'
import http from './http';

class App extends React.Component {
  toTeacher = (values) => {
    // 这是用户登陆的输入
    console.log(values)
    // 发送网络请求的例子
    http.get("http://127.0.0.1:80/log_in").then(res => {
      console.log(res)
    })
    // post请求
    let postData = {
      id: username,
      kwd: password,
      role:"teacher"
    }
    http.post("http://127.0.0.1:80/log_in", postData).then(res => {
      console.log(res)
    })
    // 路由跳转
    history.push("/teacher")
  }
  
  render() {
    return (
      <div className="App">
        <Login callback={this.toTeacher} />
      </div>
    )
  }
}

export default App;