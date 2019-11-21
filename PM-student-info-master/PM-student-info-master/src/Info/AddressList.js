import React from 'react'
import { Table } from 'antd';

const columns = [
  {
    title: '学号',
    dataIndex: 'id',
    key: 'id',
    width: '10%'
  },
  {
    title: '姓名',
    dataIndex: 'name',
    key: 'name',
    width: '10%'
  },
  {
    title: '手机号',
    dataIndex: 'phone',
    key: 'phone',
    width: '10%'
  },
];

const data = [
  {
    key: '1',
    id: '1',
    name: '张三',
    phone: '01234567890',
  },
  {
    key: '2',
    id: '2',
    name: '李四',
    phone: '01234567891',
  },
];

class AddressList extends React.Component {
  render() {
    return (
      <Table columns={columns} bordered dataSource={data} />
    )
  }
}

export default AddressList