import React from 'react';
import { Table, Divider, Tag } from 'antd';

const dataSource = [
  {
    key: '1',
    id: '1',
    name: '张三',
    sex: '男',
    age: '22',
    tags: ['班长'],
  },
  {
    key: '2',
    id: '2',
    name: '李四',
    sex: '女',
    age: '20',
    tags: ['学习委员'],
  },
];
  
const columns = [
  {
    title: '学号',
    dataIndex: 'id',
    defaultSortOrder: 'ascend',
    sorter: (a, b) => a.id - b.id,
  },
  {
    title: '姓名',
    dataIndex: 'name',
    sorter: (a, b) => a.name.localeCompare(b.name, 'zh-CN'),
  },
  {
    title: '性别',
    dataIndex: 'sex',
    sorter: (a, b) => a.sex.localeCompare(b.sex, 'zh-CN'),
  },
  {
    title: '年龄',
    dataIndex: 'age',
    sorter: (a, b) => a.age - b.age,
  },
  {
    title: '职务',
    dataIndex: 'tags',
    key: 'tags',
    render: tags => (
      <span>
        { tags.map(tag => {
          let color = tag.length > 3 ? 'geekblue' : 'green';
          if (tag === 'loser') {
            color = 'volcano';
          }
          return (
            <Tag color={color} key={tag}>
              {tag}
            </Tag>
          );
        }) }
      </span>
    ),
  },
  {
    title: '更多',
    key: 'action',
    render: (text, record) => (
      <span>
        <a href="http://127.0.0.1:3000/" target="_blank">简介</a>
        <Divider type="vertical" />
        <a>档案</a>
      </span>
    ),
  },
];

class Info extends React.Component {

  render() {
    return (
      <Table columns={columns} dataSource={dataSource} />
    )
  }
}

export default Info