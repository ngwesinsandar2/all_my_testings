import { createSlice } from '@reduxjs/toolkit'

export interface MyNameInterface {
  value: string
}

const initialState: MyNameInterface = {
  value: "Leo Lol Lame",
}

export const myNameSlice = createSlice({
  name: 'myName',
  initialState,
  reducers: {}
})

export default myNameSlice.reducer