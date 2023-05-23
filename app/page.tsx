'use client';

import { useSelector } from 'react-redux'
import { RootState } from './store'

export default function Home() {
  const my_name = useSelector((state: RootState) => state.myName.value)

  return (
    <main>
      <h1 className='text-3xl font-bold'>{my_name}</h1>
    </main>
  )
}
