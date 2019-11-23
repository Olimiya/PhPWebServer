import React from 'react'
import './Seat.css'
import { Row, Col } from 'antd'

const data = []
for (let i = 0; i < 88; i++) {
  data.push({
    name: `Edrward ${i}`,
  })
}

class Seat extends React.Component {
  render() {
    return (
      <Row>
        {data.map((val)=>(
          <Col span={3}>
            <div className="border">
              {val.name}
            </div>
          </Col>
        ))}
      </Row>
    )
  }
}

export default Seat