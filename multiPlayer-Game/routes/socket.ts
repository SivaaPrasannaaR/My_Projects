import { useSocketServer } from 'socket-controllers'
import { Server } from 'socket.io'

export default (httpServer) => {
  const io = new Server(httpServer, {
    cors: {
      origin: '*',
    },
  })

  io.on('connection', () => {})

  useSocketServer(io, { ccontrollers: [__dirname + '/api/controllers/*.ts'] })

  return io
}
